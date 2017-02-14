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
        $this->load->library('requests/Email_list_form_request');
        $this->load->library('requests/Message_list_form_request');
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
        return $this->load->view('home');
    }


    /**
     * Store a newly created email in storage.
     */
    public function store_email()
    {
        if ($this->email_list_form_request->run()) {
            $email = $this->input->post()['email'];

            if (!$this->email_model->exists($email)) {
                $this->email_model->set_email($email)
                    ->save();

                $return = [
                    'status' => true
                ];
            } else {
                $return = [
                    'status' => false,
                    'token'  => $this->security->get_csrf_hash(),
                    'errors' => ['This email is already registered!']
                ];
            }

        } else {
            $return = [
                'status' => false,
                'token'  => $this->security->get_csrf_hash(),
                'errors' => $this->email_list_form_request->fails()
            ];
        }

        echo json_encode($return);
    }

    /**
     * Store a newly created message in storage.
     */
    public function store_message()
    {
        if ($this->message_list_form_request->run()) {
            $data = $this->input->post();

            $this->message_model->set_name($data['name'])
                ->set_email($data['email'])
                ->set_subject($data['subject'])
                ->set_message($data['message'])
                ->save();

            $return = [
                'status' => true
            ];
        } else {
            $return = [
                'status' => false,
                'token'  => $this->security->get_csrf_hash(),
                'errors' => $this->message_list_form_request->fails()
            ];
        }

        echo json_encode($return);
    }

}
