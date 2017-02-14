<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email_list_model extends CI_Model
{
    /**
     * @var int
     */
    public $id;
    protected $unread;

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
     * @return bool
     */
    public function exists($email)
    {
        $sql = "SELECT email FROM x_email_list WHERE email = ? LIMIT 1";
        $query = $this->db->query($sql, $this->security->xss_clean($email));
        $result = $query->row(0, 'Email_list_model');

        return (!empty($result)) ? true : false;
    }

    /**
     * Store a email in the list.
     *
     * @return bool
     *
     * @throws InvalidArgumentException
     */
    public function save()
    {
        if (!empty($this->email)) {
            $status = $this->db->insert('x_email_list', [
                'email'  => $this->email,
                'unread' => $this->set_unread()->get_unread()
            ]);
            return $status;
        }

        throw new InvalidArgumentException('Email not can null.');
    }

    /**
     * Update if unread email in the list.
     *
     * @return Email_list_model
     */
    public function update_unread()
    {
        if (!empty($this->id)) {
            $this->db->set('unread', $this->get_unread());
            $this->db->where('id', $this->get_id());
            $status = $this->db->update('x_email_list');

            return $this;
        }

        throw new InvalidArgumentException('Unread and id not can null.');
    }

    /**
     * @return array
     */
    public function all()
    {
        $sql = "SELECT * FROM x_email_list";
        $query = $this->db->query($sql);
        $result = $query->result('Email_list_model');

        return (!empty($result)) ? $result : null;
    }

    /**
     * @return array
     */
    public function unread_emails()
    {
        $sql = "SELECT * FROM x_email_list WHERE unread = ?";
        $query = $this->db->query($sql, 1);
        $result = $query->result('Email_list_model');

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
        $status = $this->db->delete('x_email_list');

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
    public function get_email()
    {
        return $this->email;
    }

    /**
     * @param string $email
     *
     * @return Email_list_model
     *
     */
    public function set_email($email)
    {
        $this->email = $this->security->xss_clean($email);
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
     * @return Email_list_model
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
