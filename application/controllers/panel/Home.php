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
    }

    /**
     * Display a listing of the resource.
     *
     * @return HttpResponse
     */
    public function index()
    {
        return $this->load->view('panel/home', [
            'unread_emails' => $this->email_model->unread_emails(),
            'unread_messages' => $this->message_model->unread_messages(),
            'total_unread_emails' => count($this->email_model->unread_emails()),
            'total_unread_messages' => count($this->message_model->unread_messages())
        ]);
    }

}
