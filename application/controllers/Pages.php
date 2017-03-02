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
        analytics();
        return $this->load->view('pages/credits');
    }

    /**
     * Displays a work with me page.
     *
     * @return HttpResponse
     */
    public function page_work_with_me()
    {
        analytics();
        return $this->load->view('pages/work-with-me');
    }

    /**
     * Displays a temporary error page.
     *
     * @return HttpResponse
     */
    public function in_construction()
    {
        analytics();
        return $this->load->view('errors/in-construction');
    }

    /**
     * Displays a error 404 page.
     *
     * @return HttpResponse
     */
    public function page_404()
    {
        analytics();
        return $this->load->view('errors/custom-404');
    }

}
