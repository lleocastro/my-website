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
        return $this->load->view('portfolio/web-template');
    }

    /**
     *
     */
    public function page_flappy_bird()
    {
        return $this->load->view('portfolio/flappy-bird');
    }

    /**
     *
     */
    public function page_framework()
    {
        return $this->load->view('portfolio/framework');
    }

    /**
     *
     */
    public function page_leobcastro()
    {
        return $this->load->view('portfolio/leobcastro');
    }

}