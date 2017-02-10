<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message_list_model extends CI_Model
{
    /**
     * int
     */
    protected $id;

    /**
     * string
     */
    protected $name;
    protected $last_name;
    protected $email;
    protected $message;
    protected $created_at;

    /**
     * Loads the necessary resources to the controller.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Retrieve a message from list.
     *
     * @param string $id
     *
     * @return Email_list_model
     */
    public function find_one($id)
    {
        $sql = "SELECT * FROM x_visitors_messages WHERE id = ? LIMIT 1";
        $query = $this->db->query($sql, (int) $id);
        $result = $query->row(0, 'Message_list_model');

        return (!empty($result)) ? $result : null;
    }

    /**
     * Store a message in the list.
     *
     * @return bool
     */
    public function save()
    {
        if ((!empty($this->name)) && (!empty($this->last_name)) && (!empty($this->email))
            && (!empty($this->message))) {
            $status = $this->db->insert('x_visitors_messages', [
                'name' => $this->name,
                'lastname' => $this->last_name,
                'email' => $this->email,
                'message' => $this->message
            ]);

            return $status;
        }

        throw new InvalidArgumentException('Data not can null.');
    }

    /**
     * @return array
     */
    public function gets_all()
    {
        //
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
     * @return Message_list_model
     */
    public function set_name($name)
    {
        $this->name = htmlentities((string) $name);
        return $this;
    }

    /**
     * @return string
     */
    public function get_last_name()
    {
        return $this->lastname;
    }

    /**
     * @param string $last_name
     *
     * @return Message_list_model
     */
    public function set_last_name($last_name)
    {
        $this->last_name = htmlentities((string) $last_name);
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
     * @return Message_list_model
     */
    public function set_email($email)
    {
        $this->email = htmlentities((string) $email);
        return $this;
    }

    /**
     * @return string
     */
    public function get_message()
    {
        return $this->message;
    }

    /**
     * @param string $message
     *
     * @return Message_list_model
     */
    public function set_message($message)
    {
        $this->message = (string) $message;
        return $this;
    }

    /**
     * @return string
     */
    public function get_created_at()
    {
        return $this->created_at;
    }

}
