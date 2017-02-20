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
        $this->load->library('security/Hash_mask');

        $id = $this->security->xss_clean($id);
        $user = $this->email_list->find($this->hash_mask->retrieve($id));

        if (($user !== null) && ($user->get_status() == 'Pending')) {
            $status = $user->set_status('Active')->update_status();

            if ($status) {
                $body = $this->load->view('layouts/email/budget', [], true);

                sender(
                    'leobcastroinc@gmail.com', 'LEOBCASTRO',
                    $user->get_email(), 'Me Fale Sobre', $body
                );

                return $this->load->view('layouts/email/confirmed-email');
            }
        }

        redirect('/');
    }

}
