<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notification_list_model extends CI_Model
{
    /**
     * @var int
     */
    protected $id;
    protected $total_lines = null;

    /**
     * @var string
     */
    protected $name;
    protected $email;
    protected $label;
    protected $created_at;

    /**
     * @var string
     */
    private $table = 'x_notification_list';

    /**
     * Loads the necessary resources to the controller.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Retrieve a specific from list.
     *
     * @param string $email
     *
     * @return Email_list_model
     */
    public function find($email)
    {
        $sql = "SELECT * FROM {$this->table} WHERE email = ?";
        $query = $this->db->query($sql, $this->security->xss_clean($email));
        $result = $query->result('Notification_list_model');

        return (!empty($result)) ? $result : null;
    }

    /**
     * Store a message in the list.
     *
     * @return bool
     */
    public function save()
    {
        if ((!empty($this->name)) && (!empty($this->email)) && (!empty($this->label))) {
            $status = $this->db->insert($this->table, [
                'name'  => $this->name,
                'email' => $this->email,
                'label' => $this->label,
                'created_at' => date("Y-m-d H:i:s")
            ]);

            return $status;
        }

        throw new InvalidArgumentException('Data not can null.');
    }

    /**
     * Retrieve all registers.
     *
     * @return array
     */
    public function all()
    {
        $query = $this->db->get($this->table);

        if ($query->num_rows() > 0) {
            return $query->result('Notification_list_model');
        }

        return null;
    }

    /**
     * @return int
     */
    public function get_id()
    {
        return $this->security->xss_clean($this->id);
    }

    /**
     * @return string
     */
    public function get_name()
    {
        return $this->security->xss_clean($this->name);
    }

    /**
     * @param string $name
     *
     * @return Notification_list_model
     */
    public function set_name($name)
    {
        $this->name = $this->security->xss_clean($name);
        return $this;
    }

    /**
     * @return static
     */
    public function get_email()
    {
        return $this->security->xss_clean($this->email);
    }

    /**
     * @param string $email
     *
     * @return Notification_list_model
     */
    public function set_email($email)
    {
        $this->email = $this->security->xss_clean($email);
        return $this;
    }

    /**
     * @return string
     */
    public function get_label()
    {
        return $this->security->xss_clean($this->label);
    }

    /**
     * @param string $label
     *
     * @return Notification_list_model
     */
    public function set_label($label)
    {
        $this->label = $this->security->xss_clean($label);
        return $this;
    }

    /**
     * @return string
     */
    public function get_created_at()
    {
        return $this->security->xss_clean($this->created_at);
    }

}
