<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Show_emails extends CI_Controller
{
    /**
     * Loads the necessary resources to the controller.
     */
    public function __construct()
    {
        parent::__construct();
        $this->auth->who_see('auth');
        $this->load->model('Email_list_model', 'email_model');
    }

    /**
     * Display a listing of the resource.
     *
     * @return HttpResponse
     */
    public function index()
    {
        return $this->load->view('panel/emails-list', [
            'emails' => $this->email_model->all()
        ]);
    }

}
