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
    }

    /**
     * Display a listing of the resource.
     *
     * @return HttpResponse
     */
    public function in_construction()
    {
        $this->load->view('errors/in-construction');
    }

}
