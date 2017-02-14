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
        $this->load->model('Email_list_model', 'email_list');
        $this->load->model('Message_list_model', 'message_list');
        $this->load->model('Page_view_model', 'page_view');
    }

    /**
     * Display a listing of the resource.
     *
     * @return HttpResponse
     */
    public function index()
    {
        return $this->load->view('panel/home', [
            'total_unread_emails'   => $this->email_list->count(true),
            'total_unread_messages' => count($this->message_list->unread_messages()),
            'total_page_views' => $this->page_view->count(),
            'page_views'  => $this->page_view->paginate(7),
            'pagination_links' => $this->page_view->pagination_links()
        ]);
    }

}
