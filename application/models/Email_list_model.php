<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email_list_model extends CI_Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    protected $email;
    protected $created_at;

    /**
     * Loads the necessary resources to the controller.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Retrieve a email from list.
     *
     * @param string $id
     *
     * @return Email_list_model
     */
    public function find($id)
    {
        $sql = "SELECT * FROM x_email_list WHERE id = ? LIMIT 1";
        $query = $this->db->query($sql, (int) $id);
        $result = $query->row(0, 'Email_list_model');

        return (!empty($result)) ? $result : null;
    }

    /**
     * Retrieve a email from list.
     *
     * @param string $email
     *
     * @return string
     */
    public function find_by_email($email)
    {
        $sql = "SELECT email FROM x_email_list WHERE email = ? LIMIT 1";
        $query = $this->db->query($sql, htmlentities((string) $email));
        $result = $query->row(0, 'Email_list_model');

        return (!empty($result)) ? $result->email : null;
    }

    /**
     * Store a email in the list.
     *
     * @return bool
     */
    public function save()
    {
        if (!empty($this->email)) {
            $status = $this->db->insert('x_email_list', ['email' => $this->email]);
            return $status;
        }

        throw new InvalidArgumentException('Email not can null.');
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
    public function get_email()
    {
        return $this->email;
    }

    /**
     * @param string $email
     *
     * @return string
     *
     */
    public function set_email($email)
    {
        $this->email = htmlentities((string) $email);
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
