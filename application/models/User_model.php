<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;
    protected $lastname;
    protected $email;
    protected $password;

    /**
     * Loads the necessary resources to the controller.
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->library('security/Hash', 'hash');
    }

    /**
     * Retrieve all infos of determined user.
     *
     * @param string $email
     *
     * @return User_model
     */
    public function find_by_email($email)
    {
        $sql = "SELECT id, name, lastname, password FROM x_users WHERE email = ? LIMIT 1";
        $query = $this->db->query($sql, $this->security->xss_clean($email));
        $result = $query->row(0, 'User_model');

        return (!empty($result)) ? $result : null;
    }

    /**
     * Store a new user.
     *
     * @return bool
     *
     * @throws InvalidArgumentException
     */
    public function save()
    {
        if ((!empty($this->name)) && (!empty($this->last_name)) && (!empty($this->email))
            && (!empty($this->password))) {
            $status = $this->db->insert('x_users', [
                'name' => $this->name,
                'lastname' => $this->lastname,
                'email' => $this->email,
                'password' => $this->password,
                'remember_token' => $this->set_token()->get_token(),
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]);

            return $status;
        }

        throw new InvalidArgumentException('Data not can null.');
    }

    /**
     * @return bool
     */
    public function update_token()
    {
        $this->db->set([
            'remember_token' => $this->set_token()->get_token()
        ], false);

        $this->db->where('id', $this->get_id());
        $status = $this->db->update('x_users');

        return $status;
    }

    /**
     * @return int
     */
    public function get_id()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function get_name()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return User_model
     */
    public function set_name($name)
    {
        $this->name = $this->security->xss_clean($name);
        return $this;
    }

    /**
     * @return string
     */
    public function get_lastname()
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     *
     * @return User_model
     */
    public function set_lastname($lastname)
    {
        $this->lastname = $this->security->xss_clean($lastname);
        return $this;
    }

    /**
     * @return string
     */
    public function get_email()
    {
        return $this->email;
    }

    /**
     * @param string $email
     *
     * @return User_model
     */
    public function set_email($email)
    {
        $this->email = $this->security->xss_clean($email);
        return $this;
    }

    /**
     * @return string
     */
    public function get_password()
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return User_model
     */
    public function set_password($password)
    {
        $this->password = $this->hash->generate(
            $this->security->xss_clean($password)
        );

        return $this;
    }

    /**
     * @return string
     */
    public function get_token()
    {
        return $this->token;
    }

    /**
     * Set a new token for the user.
     *
     * @return User_model
     */
    protected function set_token()
    {
        $agent = filter_input(INPUT_SERVER, 'HTTP_USER_AGENT');
        $ip    = filter_input(INPUT_SERVER, 'REMOTE_ADDR');
        $host  = filter_input(INPUT_SERVER, 'HTTP_HOST');
        $date  = date('Ydm');

        $token = $this->hash->generate($host . $ip . $agent . $date);
        $this->token = $this->security->xss_clean($token);

        return $this;
    }

}
