<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blocker extends CI_Controller
{
    /**
     * Loads the necessary resources to the controller.
     */
    public function __construct()
    {
        parent::__construct();
        $this->auth->who_see('auth');
        $this->load->model('Blocker_list_model', 'blocker_list');
    }

    /**
     * Display a listing of the resource.
     *
     * @return HttpResponse
     */
    public function index()
    {
        return $this->load->view('panel/blocker', [
            'blockers' => $this->blocker_list->paginate(4),
            'pagination_links' => $this->blocker_list->pagination_links()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return HttpResponse
     */
    public function store()
    {
        $this->load->library('requests/panel/Blocker_list_form_request');

        if ($this->blocker_list_form_request->run()) {
            $data = $this->input->post();

            $this->blocker_list->set_addr($data['protocol'])
                ->set_reason($data['reason'])
                ->set_level(isset($data['level']) ? $data['level'] : 1)
                ->save();

            $return = [
                'status'  => true
            ];
        } else {
            $return = [
                'status' => false,
                'token'  => $this->security->get_csrf_hash(),
                'errors' => $this->blocker_list_form_request->fails()
            ];
        }

        echo json_encode($return);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return HttpResponse
     */
    public function destroy($id)
    {
        if ($this->blocker_list->find($id) !== null) {
            $this->blocker_list->delete($id);
        }

        redirect('dashboard/bloqueios');
    }

}
