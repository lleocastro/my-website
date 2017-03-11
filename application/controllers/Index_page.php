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
                    $this->load->library('security/Hash_mask');

                    $url  = base_url();
                    $hash = $this->hash_mask->disguise($pending->get_id());
                    $link = "{$url}confirm/email/{$hash}";
                    $out_list = "{$url}confirm/email/delete/{$hash}";
                    $body = $this->load->view('layouts/email/confirm-email', [
                        'link' => $link,
                        'out_list' => $out_list
                    ], true);

                    sender(
                        'leobcastroinc@gmail.com', 'Léo B. Castro',
                        $pending->get_email(), 'Vamos conversar um pouco?', $body
                    );
                }

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
//            sender(
//                $data['email'], $data['name'],
//                'leonardo_carvalho@outlook.com',
//               '['. $data['email'] . '] ' . $data['subject'],
//                $data['message']
//            );

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

    /**
     * Displays a curriculum pdf page.
     *
     * @return void
     */
    public function curriculum()
    {
        $file = dirname(dirname(__DIR__)) . '/public/files/curriculo.pdf';
        if (is_readable($file)) {
            header("Content-Type: application/pdf");
            @readfile($file);
            exit();
        }

        redirect('/');
    }

    /**
     *
     */
    public function curriculum_download()
    {
        $file = dirname(dirname(__DIR__)) . '/public/files/curriculo.pdf';
        if ((file_exists($file)) && (is_readable($file))) {
            header("Content-Type: application/force-download");
            header("Content-Disposition: attachment; filename=curriculo-leobcastro.pdf");
            header("Content-Length: ".filesize($file));
            header("Accept-Ranges: bytes");
            header("Pragma: no-cache");
            header("Expires: 0");
            header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
            header("Content-transfer-encoding: binary");
            @readfile($file);
            exit();
        }

        redirect('/');
    }

}
