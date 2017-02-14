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
        $this->load->model('Email_list_model', 'email_model');
        $this->load->model('Message_list_model', 'message_model');
        $this->load->model('Page_view_model', 'view_model');
    }

    /**
     * Display a listing of the resource.
     *
     * @return HttpResponse
     */
    public function index()
    {
        return $this->load->view('panel/home', [
            'total_unread_emails'   => count($this->email_model->unread_emails()),
            'total_unread_messages' => count($this->message_model->unread_messages()),
            'page_views' => $this->view_model->all()
        ]);
    }

}
