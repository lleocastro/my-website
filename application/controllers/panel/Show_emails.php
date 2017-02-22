<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Show_emails extends CI_Controller
{
    /**
     * Loads the necessary resources to the controller.
     */
    public function __construct()
    {
        parent::__construct();
        $this->auth->who_see('auth');
        $this->load->model('Email_list_model', 'email_list');
    }

    /**
     * Display a listing of the resource.
     *
     * @return HttpResponse
     */
    public function index()
    {
        return $this->load->view('panel/emails-list', [
            'emails' => $this->email_list->paginate(5),
            'pagination_links' => $this->email_list->pagination_links()
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return HttpResponse
     */
    public function show($id)
    {
        $email = $this->email_list->find($id)->set_unread(0)
            ->update_unread();

        return $this->load->view('panel/show-data', [
            'email' => $email
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     */
    public function destroy($id)
    {
        if ($this->email_list->find($id) !== null) {
            $this->email_list->delete($id);
        }

        redirect('dashboard/emails');
    }

    /**
     *
     */
    public function emails_download()
    {
        $this->load->helper('file');
        $data   = json_encode($this->email_list->all_in_array());
        $status = write_file(dirname(dirname((__DIR__))) . '/cache/emails.json', $data);

        if ($status) {
            $file = dirname(dirname((__DIR__))) . '/cache/emails.json';
            if ((file_exists($file)) && (is_readable($file))) {
                header("Content-Type: application/force-download");
                header("Content-Disposition: attachment; filename=leobcastro-emails.json");
                header("Content-Length: ".filesize($file));
                header("Accept-Ranges: bytes");
                header("Pragma: no-cache");
                header("Expires: 0");
                header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
                header("Content-transfer-encoding: binary");

                @readfile($file);
                unset($data);
                exit();
            }
        }
    }

    public function resend($id)
    {
        $pending = $this->email_list->find($id);

        if ($pending !== null) {
            $this->load->library('security/Hash_mask');

            $url  = base_url();
            $hash = $this->hash_mask->disguise($pending->get_id());
            $link = "{$url}confirm/email/{$hash}";
            $body = $this->load->view('layouts/email/reconfirm-email', ['link' => $link], true);

            sender(
                'leobcastroinc@gmail.com', 'LEOBCASTRO',
                $pending->get_email(), 'Confimar E-mail', $body
            );

            $return = [
                'status' => true
            ];
        } else {
            $return = [
                'status' => false
            ];
        }

        echo json_encode($return);
    }

}
