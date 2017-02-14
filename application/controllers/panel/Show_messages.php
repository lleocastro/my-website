<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Show_messages extends CI_Controller
{
    /**
     * Loads the necessary resources to the controller.
     */
    public function __construct()
    {
        parent::__construct();
        $this->auth->who_see('auth');
        $this->load->model('Message_list_model', 'message_list');
    }

    /**
     * Display a listing of the resource.
     *
     * @return HttpResponse
     */
    public function index()
    {
        return $this->load->view('panel/messages-list', [
            'messages' => $this->message_list->paginate(5),
            'pagination_links' => $this->message_list->pagination_links()
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
        $message = $this->message_list->find($id)->set_unread(0)
            ->update_unread();

        return $this->load->view('panel/show-data', [
            'message' => $message
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     */
    public function destroy($id)
    {
        if ($this->message_list->find($id) !== null) {
            $this->message_list->delete($id);
        }

        redirect('dashboard/messages');
    }

}
