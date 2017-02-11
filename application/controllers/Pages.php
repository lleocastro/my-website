<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller
{
    /**
     * Loads the necessary resources to the controller.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Displays a author credits page.
     *
     * @return HttpResponse
     */
    public function page_credits()
    {
        return $this->load->view('pages/credits');
    }

}
