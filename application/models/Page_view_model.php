<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page_view_model extends CI_Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    protected $agent;
    protected $addr;
    protected $host;
    protected $route;
    protected $date_time;

    /**
     * @var string
     */
    private $table = 'x_page_views';

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
     * Store a informations.
     *
     * @return bool
     *
     * @throws InvalidArgumentException
     */
    public function save()
    {
        if ((!empty($this->agent)) && (!empty($this->addr)) && (!empty($this->host))
            && (!empty($this->route))) {
            $status = $this->db->insert($this->table, [
                'agent' => $this->agent,
                'addr'  => $this->addr,
                'host'  => $this->host,
                'route' => $this->route,
                'date_time' => date("Y-m-d H:i:s")
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
        $this->db->order_by('date_time', 'desc');
        $query = $this->db->get($this->table);

        if ($query->num_rows() > 0) {
            return $query->result('Page_view_model');
        }

        return null;
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

        $offset = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;

        $this->db->order_by('date_time', 'desc');
        $query = $this->db->get($this->table, $this->total_lines, $offset);

        if ($query->num_rows() > 0) {
            return $query->result('Page_view_model');
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
                'base_url'    => base_url('/dashboard'),
                'per_page'    => $this->total_lines,
                'num_links'   => 5,
                'uri_segment' => 2,
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
    public function get_agent()
    {
        return $this->agent;
    }

    /**
     * @param string $agent
     * @return Page_view_model
     */
    public function set_agent($agent)
    {
        $this->agent = $this->security->xss_clean($agent);
        return $this;
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
     * @return Page_view_model
     */
    public function set_addr($addr)
    {
        $this->addr = $this->security->xss_clean($addr);
        return $this;
    }

    /**
     * @return string
     */
    public function get_host()
    {
        return $this->host;
    }

    /**
     * @param string $host
     * @return Page_view_model
     */
    public function set_host($host)
    {
        $this->host = $this->security->xss_clean($host);
        return $this;
    }

    /**
     * @return string
     */
    public function get_route()
    {
        return $this->route;
    }

    /**
     * @param string $route
     * @return Page_view_model
     */
    public function set_route($route)
    {
        $this->route = $this->security->xss_clean($route);
        return $this;
    }

    /**
     * @return string
     */
    public function get_date_time()
    {
        return $this->date_time;
    }

}
