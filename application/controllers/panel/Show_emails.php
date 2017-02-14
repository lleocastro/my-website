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
        $this->load->model('Email_list_model', 'email_model');
    }

    /**
     * Display a listing of the resource.
     *
     * @return HttpResponse
     */
    public function index()
    {
        return $this->load->view('panel/emails-list', [
            'emails' => $this->email_model->all()
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
        $email = $this->email_model->find($id)->set_unread(0)
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
        if ($this->email_model->find($id) !== null) {
            $this->email_model->delete($id);
        }

        redirect('dashboard/emails');
    }

}
