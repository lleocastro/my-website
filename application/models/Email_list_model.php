<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email_list_model extends CI_Model
{
    /**
     * @var int
     */
    protected $id;
    protected $unread;
    protected $total_lines = null;

    /**
     * @var string
     */
    protected $email;
    protected $addr;
    protected $created_at;
    protected $updated_at;
    protected $status;

    /**
     * @var string
     */
    private $table = 'x_email_list';

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
        $sql = "SELECT * FROM {$this->table} WHERE id = ? LIMIT 1";
        $query = $this->db->query($sql, (int)$id);
        $result = $query->row(0, 'Email_list_model');

        return (!empty($result)) ? $result : null;
    }

    /**
     * Retrieve a email from list.
     *
     * @param string $email
     *
     * @return Email_list_model
     */
    public function find_by_email($email)
    {
        $sql = "SELECT * FROM {$this->table} WHERE email = ? LIMIT 1";
        $query = $this->db->query($sql, $this->security->xss_clean($email));
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
        $sql = "SELECT email FROM {$this->table} WHERE email = ? LIMIT 1";
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
            $status = $this->db->insert($this->table, [
                'email' => $this->email,
                'unread' => $this->set_unread()->get_unread(),
                'addr' => $this->set_addr()->get_addr(),
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
                'status' => 'Pending'
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
            $this->db->set('updated_at', date("Y-m-d H:i:s"));
            $this->db->where('id', $this->get_id());
            $this->db->update($this->table);

            return $this;
        }

        throw new InvalidArgumentException('Unread and id not can null.');
    }

    /**
     * @return array
     */
    public function all()
    {
        $query = $this->db->get($this->table);

        if ($query->num_rows() > 0) {
            return $query->result('Email_list_model');
        }

        return null;
    }

    /**
     *
     * @param bool $count_unread
     *
     * @return int
     */
    public function count($count_unread = false)
    {
        if ($count_unread) {
            $this->db->where('unread', 1);
            return $this->db->count_all_results($this->table);
        }

        return $this->db->count_all($this->table);
    }

    /**
     * @return array
     */
    public function unread_emails()
    {
        $sql = "SELECT * FROM {$this->table} WHERE unread = ?";
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
        $this->db->where('id', (int)$id);
        $status = $this->db->delete($this->table);

        return $status;
    }

    /**
     * @param int $total_lines
     *
     * @return Page_view_model
     */
    public function paginate($total_lines)
    {
        $this->total_lines = (int)$total_lines;

        $offset = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $query = $this->db->get($this->table, $this->total_lines, $offset);

        if ($query->num_rows() > 0) {
            return $query->result('Email_list_model');
        }

        return null;
    }

    /**
     * @return string
     */
    public function pagination_links()
    {
        if ($this->total_lines !== null) {
            $this->load->library('pagination');

            $config = [
                'base_url' => base_url('/dashboard/emails'),
                'per_page' => $this->total_lines,
                'num_links' => 5,
                'uri_segment' => 3,
                'total_rows' => $this->count(),
            ];

            $this->pagination->initialize(array_merge($config, pagination_styled()));
            return $this->pagination->create_links();
        }

        return null;
    }

    public function update_status()
    {
        if (!empty($this->status)) {
            $this->db->set('status', $this->status);
            $this->db->set('updated_at', date("Y-m-d H:i:s"));
            $this->db->where('id', $this->get_id());
            $status = $this->db->update($this->table);

            return $status;
        }

        throw new InvalidArgumentException('Status and id not can null.');

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
    public function get_email()
    {
        return $this->security->xss_clean($this->email);
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
     * @return string
     */
    public function get_addr()
    {
        return $this->security->xss_clean($this->addr);
    }

    /**
     * @return Email_list_model
     */
    protected function set_addr()
    {
        $this->addr = $this->security->xss_clean(
            filter_input(INPUT_SERVER, 'REMOTE_ADDR')
        );

        return $this;
    }

    /**
     * @return int
     */
    public function get_unread()
    {
        return $this->security->xss_clean($this->unread);
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
        return $this->security->xss_clean($this->created_at);
    }

    /**
     * @return string
     */
    public function get_updated_at()
    {
        return $this->security->xss_clean($this->updated_at);
    }

    /**
     * @return string
     */
    public function get_status()
    {
        return $this->security->xss_clean($this->status);
    }

    /**
     *
     * @param string $status
     *
     * @return Email_list_model
     */
    public function set_status($status)
    {
        $this->status = $this->security->xss_clean($status);
        return $this;
    }

}
