<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message_list_model extends CI_Model
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
    protected $name;
    protected $email;
    protected $subject;
    protected $message;
    protected $addr;
    protected $created_at;
    protected $updated_at;

    /**
     * @var string
     */
    private $table = 'x_message_list';

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
        $sql = "SELECT * FROM {$this->table} WHERE id = ? LIMIT 1";
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
            $status = $this->db->insert($this->table, [
                'name'    => $this->name,
                'email'   => $this->email,
                'subject' => $this->subject,
                'message' => $this->message,
                'unread'  => $this->set_unread()->get_unread(),
                'addr'    => $this->set_addr()->get_addr(),
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
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
            return $query->result('Message_list_model');
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
    public function unread_messages()
    {
        $sql = "SELECT * FROM {$this->table} WHERE unread = ?";
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
        $this->total_lines = (int) $total_lines;

        $offset = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $query  = $this->db->get($this->table, $this->total_lines, $offset);

        if ($query->num_rows() > 0) {
            return $query->result('Message_list_model');
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
                'base_url'    => base_url('/dashboard/messages'),
                'per_page'    => $this->total_lines,
                'num_links'   => 5,
                'uri_segment' => 3,
                'total_rows'  => $this->count(),
            ];

            $this->pagination->initialize(array_merge($config, pagination_styled()));
            return $this->pagination->create_links();
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
        return $this->security->xss_clean($this->email);
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
        return $this->security->xss_clean($this->subject);
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
        return $this->security->xss_clean($this->message);
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
    public function get_addr()
    {
        return $this->security->xss_clean($this->addr);
    }

    /**
     * @return Message_list_model
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
        return $this->security->xss_clean($this->created_at);
    }

    /**
     * @return string
     */
    public function get_updated_at()
    {
        return $this->security->xss_clean($this->updated_at);
    }

}
