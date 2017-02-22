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
        $this->load->model('Email_list_model', 'email_list');
        $this->load->library('security/Hash_mask');
    }

    /**
     *
     */
    public function email_list($id)
    {
        $id   = $this->security->xss_clean($id);
        $user = $this->email_list->find($this->hash_mask->retrieve($id));

        if (($user !== null) && ($user->get_status() == 'Pending')) {
            $status = $user->set_status('Active')->update_status();

            if ($status) {
                $this->load->library('security/Hash_mask');

                $url  = base_url();
                $hash = $this->hash_mask->disguise($user->get_id());
                $out_list = "{$url}confirm/email/delete/{$hash}";
                $body = $this->load->view('layouts/email/budget', [
                    'out_list' => $out_list
                ], true);

                sender(
                    'leobcastroinc@gmail.com', 'Léo B. Castro',
                    $user->get_email(), 'Me fale um pouco sobre o problema que você esta tendo em seu negócio', $body
                );

                return $this->load->view('layouts/email/confirmed-email');
            }
        }

        redirect('/');
    }

    /**
     *
     */
    public function destroy_email_list($id)
    {
        $id   = $this->security->xss_clean($id);
        $user = $this->email_list->find($this->hash_mask->retrieve($id));

        if ($user !== null) {
            $user->delete($user->get_id());
        }

        redirect('/');
    }

    /**
     *
     */
    public function budget($id)
    {
        $id   = $this->security->xss_clean($id);
        $user = $this->email_list->find($this->hash_mask->retrieve($id));

        if (($user !== null) && ($user->get_status() == 'Active')) {
            $this->load->library('security/Hash_mask');

            $url  = base_url();
            $hash = $this->hash_mask->disguise($user->get_id());
            $out_list = "{$url}confirm/email/delete/{$hash}";
            $body = $this->load->view('layouts/email/budget', [
                'out_list' => $out_list
            ], true);

            sender(
                'leobcastroinc@gmail.com', 'Léo B. Castro',
                $user->get_email(), 'Me fale um pouco sobre o problema que você esta tendo em seu negócio', $body
            );

            return $this->load->view('layouts/email/confirmed-email');
        }

        redirect('/');
    }

}
