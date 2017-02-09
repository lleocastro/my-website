<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index_page extends CI_Controller
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
    public function index()
    {
        $this->load->view('home');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return HttpResponse
     */
    public function store_email()
    {
        //
    }

}
