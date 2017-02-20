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
        analytics();
        return $this->load->view('home');
    }

    /**
     * Store a newly created email in storage.
     */
    public function store_email()
    {
        $this->load->library('requests/Email_list_form_request');
        $this->load->model('Email_list_model', 'email_list');

        if ($this->email_list_form_request->run()) {
            $email = $this->input->post()['email'];

            if (!$this->email_list->exists($email)) {
                $this->email_list->set_email($email)
                    ->save();

                $pending = $this->email_list->find_by_email($email);
                if ($pending !== null) {
                    $this->load->library('encrypt');
                    $hash = $this->encrypt->encode($pending->get_id());
                    $url = base_url();
                    $link = "{$url}confirm/email/{$hash}";
                    $body = $this->load->view('layouts/email/confirm-email', ['link' => $link], true);
                    sender(
                        'leobcastroinc@gmail.com', 'LEOBCASTRO',
                        $pending->get_email(), 'Confimar E-mail', $body
                    );
                }

                // Email notification
                notify('Novo Email!', "Opaaa! Temos um novo email em nossa lista '{$email}' :)");

                $return = [
                    'status' => true
                ];
            } else {
                $return = [
                    'status' => false,
                    'token'  => $this->security->get_csrf_hash(),
                    'errors' => ['Este e-mail já está registado!']
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
        $this->load->library('requests/Message_list_form_request');
        $this->load->model('Message_list_model', 'message_list');

        if ($this->message_list_form_request->run()) {
            $data = $this->input->post();

            $this->message_list->set_name($data['name'])
                ->set_email($data['email'])
                ->set_subject($data['subject'])
                ->set_message($data['message'])
                ->save();

            // Sent to email too
            sender(
                $data['email'], $data['name'],
                'leonardo_carvalho@outlook.com',
                $data['subject'], $data['message']
            );

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
