<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blocker_list_model extends CI_Model
{
    /**
     * @var int
     */
    protected $id;
    protected $level;

    /**
     * @var string
     */
    protected $addr;
    protected $reason;
    protected $created_at;

    /**
     * @var string
     */
    private $table = 'x_blocker_list';

    /**
     * @var int
     */
    protected $total_lines = null;

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
        $query = $this->db->query($sql, (int) $id);
        $result = $query->row(0, 'Blocker_list_model');

        return (!empty($result)) ? $result : null;
    }

    /**
     * Store a informations.
     *
     * @return bool
     *
     * @throws InvalidArgumentException
     */
    public function save()
    {
        if ((!empty($this->addr)) && (!empty($this->level))) {
            $status = $this->db->insert($this->table, [
                'addr'   => $this->addr,
                'reason' => $this->reason,
                'level'  => $this->level,
                'created_at' => date("Y-m-d H:i:s")
            ]);

            return $status;
        }

        throw new InvalidArgumentException('Data not can null.');
    }

    /**
     * @return array
     */
    public function all()
    {
        $query = $this->db->get($this->table);

        if ($query->num_rows() > 0) {
            return $query->result('Blocker_list_model');
        }

        return null;
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
     * @return int
     */
    public function count()
    {
        return $this->db->count_all($this->table);
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
            return $query->result('Blocker_list_model');
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
                'base_url'    => base_url('/dashboard/bloqueios'),
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
        return $this->id;
    }

    /**
     * @return string
     */
    public function get_addr()
    {
        return $this->addr;
    }

    /**
     * @param string $addr
     *
     * @return Blocker_list_model
     */
    public function set_addr($addr)
    {
        $this->addr = $this->security->xss_clean($addr);
        return $this;
    }

    /**
     * @return string
     */
    public function get_reason()
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     *
     * @return Blocker_list_model
     */
    public function set_reason($reason)
    {
        $this->reason = $this->security->xss_clean($reason);
        return $this;
    }

    /**
     * @return string
     */
    public function get_level()
    {
        return $this->level;
    }

    /**
     * @param int $level
     *
     * @return Blocker_list_model
     */
    public function set_level($level)
    {
        if (($level == 1) || ($level == 2)) {
            $this->level = (int) $level;
        } else {
            $this->level = 1;
        }

        return $this;
    }

    /**
     * @return string
     */
    public function get_timestamp()
    {
        return $this->created_at;
    }

}
