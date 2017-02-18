<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blocker_list_form_request
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
            'Protocol' => [
                'field' => 'protocol',
                'label' => 'identidade',
                'rules' => 'trim|required|xss_clean|valid_ip|max_length[15]'
            ],
            'Reason' => [
                'field' => 'reason',
                'label' => 'motivo',
                'rules' => 'trim|xss_clean|min_length[3]|max_length[100]'
            ],
            'Level' => [
                'field' => 'level',
                'label' => 'nivel',
                'rules' => 'required|xss_clean|integer|max_length[2]'
            ],
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
