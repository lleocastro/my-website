<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message_list_model extends CI_Model
{
    /**
     * @var int
     */
    protected $id;
    protected $unread;

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
                'message' => $this->message,
                'unread'  => $this->set_unread()->get_unread()
            ]);

            return $status;
        }

        throw new InvalidArgumentException('Data not can null.');
    }

    /**
     * Update if unread email in the list.
     *
     * @return Message_list_model
     */
    public function update_unread()
    {
        if (!empty($this->id)) {
            $this->db->set('unread', $this->get_unread());
            $this->db->where('id', $this->get_id());
            $this->db->update('x_visitors_messages');

            return $this;
        }

        throw new InvalidArgumentException('Unread and id not can null.');
    }

    /**
     * @return array
     */
    public function all()
    {
        $sql = "SELECT * FROM x_visitors_messages";
        $query = $this->db->query($sql);
        $result = $query->result('Message_list_model');

        return (!empty($result)) ? $result : null;
    }

    /**
     * @return array
     */
    public function unread_messages()
    {
        $sql = "SELECT * FROM x_visitors_messages WHERE unread = ?";
        $query = $this->db->query($sql, 1);
        $result = $query->result('Message_list_model');

        return (!empty($result)) ? $result : null;
    }

    /**
     * @param int $id
     *
     * @return bool
     */
    public function delete($id)
    {
        $this->db->where('id', (int) $id);
        $status = $this->db->delete('x_visitors_messages');

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
     * @return int
     */
    public function get_unread()
    {
        return $this->unread;
    }

    /**
     * @param int $unread
     *
     * @return Message_list_model
     *
     */
    public function set_unread($unread = 1)
    {
        $this->unread = (int) $unread;
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
