<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notifications extends CI_Controller
{
    /**
     * Loads the necessary resources to the controller.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function blog_done()
    {
        $this->load->library('requests/Notification_list_form_request');
        $this->load->model('Notification_list_model', 'notification');

        if ($this->notification_list_form_request->run()) {
            $data = $this->input->post();

            $notifications = $this->notification->find($data['email']);

            if ($notifications !== null) {
                foreach ($notifications as $notification) {
                    if ($notification->get_label() == 'blog') {
                        echo json_encode([
                            'status' => false,
                            'token'  => $this->security->get_csrf_hash(),
                            'errors' => ['Esse e-mail já está registrado!']
                        ]);

                        return false;
                    }
                }
            }

            $this->notification->set_name($data['name'])
                ->set_email($data['email'])
                ->set_label('blog')
                ->save();

            $return = [
                'status' => true
            ];

        } else {
            $return = [
                'status' => false,
                'token'  => $this->security->get_csrf_hash(),
                'errors' => $this->notification_list_form_request->fails()
            ];
        }

        echo json_encode($return);
    }

}
