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
     *
     */
    public function page_web_template()
    {
        $this->load->view('portfolio/web-template');
    }

    /**
     *
     */
    public function page_flappy_bird()
    {
        $this->load->view('portfolio/flappy-bird');
    }

    /**
     *
     */
    public function page_framework()
    {
        $this->load->view('portfolio/framework');
    }

    /**
     *
     */
    public function page_leobcastro()
    {
        $this->load->view('portfolio/leobcastro');
    }

}