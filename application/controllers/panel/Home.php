<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
    /**
     * Loads the necessary resources to the controller.
     */
    public function __construct()
    {
        parent::__construct();
        $this->auth->who_see('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return HttpResponse
     */
    public function index()
    {
        return $this->load->view('panel/home');
    }

}
