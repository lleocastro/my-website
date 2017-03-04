<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page_view_model extends CI_Model
{
    /**
     * @var int
     */
    protected $id;

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
     * @var array
     */
    protected $ignore_list = [];

    /**
     * Loads the necessary resources to the controller.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function find_by_addr($addr)
    {
        $sql = "SELECT * FROM {$this->table} WHERE addr = ? LIMIT 1";
        $query = $this->db->query($sql, $this->security->xss_clean($addr));
        $result = $query->row(0, 'Page_view_model');

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
        if ((!empty($this->agent)) && (!empty($this->addr)) && (!empty($this->host))
            && (!empty($this->route))) {

            if (!empty($this->ignore_list)) {
                foreach ($this->ignore_list as $ignore) {
                    if ($this->addr == $ignore) {
                        return false;
                    }
                }
            }

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
     *
     */
    public function online_counter()
    {
        $page_views = $this->all();
        $on = 0;

        foreach ($page_views as $page_view) {
            if (substr($page_view->get_date_time(), 0, strlen($page_view->get_date_time())-3)
                == substr(date("Y-m-d H:i:s"), 0, strlen(date("Y-m-d H:i:s"))-3) ) {
                if (substr($page_view->get_date_time(), -2) <= 40) {
                    $on++;
                } else {
                    $on--;
                }
            }
        }

        unset($page_view);
        return $on;
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

    public function ignores(array $addrs)
    {
        $this->ignore_list = $addrs;
        return $this;
    }

    public function delete($ip)
    {
        $this->db->where('addr', $this->security->xss_clean($ip));
        $status = $this->db->delete($this->table);

        return $status;
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
    public function get_agent()
    {
        return $this->security->xss_clean($this->agent);
    }

    /**
     * @param string $agent
     *
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
        return $this->security->xss_clean($this->addr);
    }

    /**
     * @param string $addr
     *
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
        return $this->security->xss_clean($this->host);
    }

    /**
     * @param string $host
     *
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
        return $this->security->xss_clean($this->route);
    }

    /**
     * @param string $route
     *
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
        return $this->security->xss_clean($this->date_time);
    }

}
