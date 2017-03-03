<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Show_notifications extends CI_Controller
{
    /**
     * Loads the necessary resources to the controller.
     */
    public function __construct()
    {
        parent::__construct();
        $this->auth->who_see('auth');
        $this->load->model('Notification_list_model', 'notification_list');
    }

    /**
     * Display a listing of the resource.
     *
     * @return HttpResponse
     */
    public function index()
    {
        return $this->load->view('panel/notification-list', [
            'notifications' => $this->notification_list->paginate(5),
            'pagination_links' => $this->notification_list->pagination_links()
        ]);
    }

    /**
     *
     */
    public function notifications_download()
    {
        $this->load->helper('file');
        $data   = json_encode($this->notification_list->all_in_array());
        $status = write_file(dirname(dirname((__DIR__))) . '/cache/notifications.json', $data);

        if ($status) {
            $file = dirname(dirname((__DIR__))) . '/cache/notifications.json';
            if ((file_exists($file)) && (is_readable($file))) {
                header("Content-Type: application/force-download");
                header("Content-Disposition: attachment; filename=leobcastro-notifications.json");
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

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     */
    public function destroy($id)
    {
        if ($this->notification_list->find($id) !== null) {
            $this->notification_list->delete($id);
        }

        redirect('dashboard/notificacoes');
    }

}
