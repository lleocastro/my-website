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
            $status = $this->db->insert('x_page_views', [
                'agent' => $this->agent,
                'addr'  => $this->addr,
                'host'  => $this->host,
                'route' => $this->route,
                'date_time' => $this->set_date_time()->get_date_time()
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
        $sql = "SELECT * FROM x_page_views";
        $query = $this->db->query($sql);
        $result = $query->result('Page_view_model');

        return (!empty($result)) ? $result : null;
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

    /**
     * @return Page_view_model
     */
    protected function set_date_time()
    {
        $this->date_time = date("Y-m-d H:i:s");
        return $this;
    }

}
