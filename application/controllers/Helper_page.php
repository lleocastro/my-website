<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Helper_page extends CI_Controller
{
    /**
     * Loads the necessary resources to the controller.
     */
    public function __construct()
    {
        parent::__construct();
        $this->output->cache('9999');
    }

    /**
     * Displays a temporary error page.
     *
     * @return HttpResponse
     */
    public function in_construction()
    {
        return $this->load->view('errors/in-construction');
    }

}
