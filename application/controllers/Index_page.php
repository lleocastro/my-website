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
        $this->load->library('form_validation');
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
        $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|xss_clean|min_length[7]|max_length[100]');

        if ($this->form_validation->run() !== false) {
            $email = $this->input->post()['email'];

            if ($this->email_model->find_by_email($email) == null) {
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
            $errors = trim(validation_errors());
            $errors = str_ireplace('<p>', '', $errors);
            $errors = str_ireplace('</p>', '', $errors);
            $errors = str_ireplace("\n", '', $errors);
            $return = [
                'status' => false,
                'token'  => $this->security->get_csrf_hash(),
                'errors' => array_filter(explode('.', $errors))
            ];
        }

        echo json_encode($return);
    }

    /**
     * Store a newly created message in storage.
     */
    public function store_message()
    {
        $recaptcha = new \ReCaptcha\ReCaptcha(getenv('RECAPTCHA_KEY'));
        $resp = $recaptcha->verify($this->input->post()['g-recaptcha-response'], filter_input(INPUT_SERVER, 'REMOTE_ADDR'));

        if ($resp->isSuccess()) {
            $this->form_validation->set_rules('name', 'nome', 'trim|required|xss_clean|min_length[3]|max_length[50]');
            $this->form_validation->set_rules('lastname', 'sobrenome', 'trim|required|xss_clean|min_length[3]|max_length[50]');
            $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|xss_clean|min_length[7]|max_length[100]');
            $this->form_validation->set_rules('message', 'mensagem', 'trim|required|xss_clean|min_length[2]');

            if ($this->form_validation->run() !== false) {
                $data = $this->input->post();

                $this->message_model->set_name($data['name'])
                    ->set_last_name($data['lastname'])
                    ->set_email($data['email'])
                    ->set_message($data['message'])
                    ->save();

                $return = [
                    'status' => true
                ];
            } else {
                $errors = trim(validation_errors());
                $errors = str_ireplace('<p>', '', $errors);
                $errors = str_ireplace('</p>', '', $errors);
                $errors = str_ireplace("\n", '', $errors);
                $return = [
                    'status' => false,
                    'errors' => array_filter(explode('.', $errors))
                ];
            }
        } else {
            $return = [
                'status' => false,
                'errors' => $resp->getErrorCodes()
            ];
        }

        echo json_encode($return);
    }

}
