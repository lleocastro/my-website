<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Confirmation extends CI_Controller
{
    /**
     * Loads the necessary resources to the controller.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     *
     */
    public function email_list($id)
    {
        $this->load->model('Email_list_model', 'email_list');
        $this->load->library('encrypt');

        $user = $this->email_list->find($this->encrypt->decode($id));
        if (($user !== null) && ($user->get_status() == 'Pending')) {
            $status = $user->set_status('Active')->update_status();

            if ($status) {
                return $this->load->view('pages/confirmed-email');
            }

            echo 'Ops! Parece que algo deu errado :( Acesse o link novamente!';
        }

        redirect('/');
    }

}
