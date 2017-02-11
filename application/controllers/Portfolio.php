<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends CI_Controller
{
    /**
     * Loads the necessary resources to the controller.
     */
    public function __construct()
    {
        parent::__construct();
        //$this->output->cache('120');
    }

    /**
     * Displays a porfólio page.
     *
     * @return HttpResponse
     */
    public function page_web_template()
    {
        return $this->load->view('portfolio/web-template');
    }

    /**
     * Displays a porfólio page.
     *
     * @return HttpResponse
     */
    public function page_flappy_bird()
    {
        return $this->load->view('portfolio/flappy-bird');
    }

    /**
     * Displays a porfólio page.
     *
     * @return HttpResponse
     */
    public function page_framework()
    {
        return $this->load->view('portfolio/framework');
    }

    /**
     * Displays a porfólio page.
     *
     * @return HttpResponse
     */
    public function page_leobcastro()
    {
        return $this->load->view('portfolio/leobcastro');
    }

}
