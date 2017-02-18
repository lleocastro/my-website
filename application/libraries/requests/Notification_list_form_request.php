<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notification_list_form_request
{
    /**
     * Reference to CodeIgniter instance.
     *
     * @var object
     */
    protected $CI;

    /**
     * Create a new request instance and load necessary resources.
     */
    public function __construct()
    {
        $this->CI =& get_instance();
        $this->CI->load->library('form_validation');
    }

    /**
     * Validation rules that apply to the request.
     *
     * @return array
     */
    protected function rules()
    {
        return [
            'Name' => [
                'field' => 'name',
                'label' => 'nome',
                'rules' => 'trim|required|min_length[3]|max_length[50]'
            ],
            'Email' => [
                'field' => 'email',
                'label' => 'email',
                'rules' => 'trim|required|valid_email|min_length[7]|max_length[100]'
            ],
            'Label' => [
                'field' => 'label',
                'label' => 'label',
                'rules' => 'trim|min_length[2]|max_length[30]'
            ]
        ];
    }

    /**
     * @return bool
     */
    public function run()
    {
        $this->CI->form_validation->set_rules($this->rules());
        return ($this->CI->form_validation->run() !== false) ? true : false;
    }

    /**
     * @return array
     */
    public function fails()
    {
        return get_validation_errors_in_array();
    }

}
