<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message_list_model extends CI_Model
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;
    protected $email;
    protected $subject;
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
    public function find($id)
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
        if ((!empty($this->name)) && (!empty($this->email)) && (!empty($this->subject))
            && (!empty($this->message))) {
            $status = $this->db->insert('x_visitors_messages', [
                'name'    => $this->name,
                'email'   => $this->email,
                'subject' => $this->subject,
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
        $this->name = $this->security->xss_clean($name);
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
        $this->email = $this->security->xss_clean($email);
        return $this;
    }

    /**
     * @return string
     */
    public function get_subject()
    {
        return $this->subject;
    }

    /**
     * @param string $subject
     *
     * @return Message_list_model
     */
    public function set_subject($subject)
    {
        $this->subject = $this->security->xss_clean($subject);
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
        $this->message = $this->security->xss_clean($message);
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
