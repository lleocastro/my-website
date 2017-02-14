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
    }

    /**
     * Displays a porfólio page.
     *
     * @return HttpResponse
     */
    public function page_web_template()
    {
        analytics();
        return $this->load->view('portfolio/web-template');
    }

    /**
     * Displays a porfólio page.
     *
     * @return HttpResponse
     */
    public function page_flappy_bird()
    {
        analytics();
        return $this->load->view('portfolio/flappy-bird');
    }

    /**
     * Displays a porfólio page.
     *
     * @return HttpResponse
     */
    public function page_framework()
    {
        analytics();
        return $this->load->view('portfolio/framework');
    }

    /**
     * Displays a porfólio page.
     *
     * @return HttpResponse
     */
    public function page_leobcastro()
    {
        analytics();
        return $this->load->view('portfolio/leobcastro');
    }

}
