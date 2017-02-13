<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth
{
    /**
     * Reference to CodeIgniter instance
     *
     * @var object
     */
    protected $CI;

    /**
     * store the validations errors.
     *
     * @var array
     */
    protected $errors = [];

    /**
     * Create a new auth instance and load necessary resources.
     */
    public function __construct()
    {
        $this->CI =& get_instance();
        $this->CI->load->library('requests/Login_form_request');
        $this->CI->load->library('requests/User_form_request');
        $this->CI->load->library('security/Hash', 'hash');
        $this->CI->load->model('User_model', 'user');
        $this->CI->lang->load("auth");
    }

    /**
     * User authentication and session data creation.
     *
     * @return Auth
     */
    public function authenticate()
    {
        if ($this->CI->login_form_request->run()) {
            $data = $this->CI->input->post();
            $user = $this->CI->user->find_by_email($data['email']);
            $pass = $this->CI->security->xss_clean($data['password']);

            if(($user == null)
                || (!$this->CI->hash->is_equals($pass, $user->get_password()))) {
                $this->errors['credentials'] = $this->CI->lang->line('login_global_error');
                return $this;
            }

            $user->update_token();
            $this->CI->session->set_userdata([
                'auth_user_id' => $user->get_id(),
                'auth_user_name' => $user->get_name(),
                'auth_user_lastname' => $user->get_lastname(),
                'auth_user_email' => $this->CI->security->xss_clean($data['email']),
                'auth_user_status' => $this->CI->hash->generate(date('Ydm')),
                'auth_user_token' => $user->get_token()
            ]);

            return null;
        }

        $this->errors = $this->CI->login_form_request->fails();
        return $this;
    }

    /**
     * Checks whether the guest is authenticated.
     *
     * @return bool
     */
    public function can()
    {
        if(($this->CI->session->has_userdata('auth_user_status') !== null)
            && ($this->CI->hash->is_equals(date('Ydm'), $this->CI->session->userdata('auth_user_status')))) {

            $agent = filter_input(INPUT_SERVER, 'HTTP_USER_AGENT');
            $ip    = filter_input(INPUT_SERVER, 'REMOTE_ADDR');
            $host  = filter_input(INPUT_SERVER, 'HTTP_HOST');
            $date  = date('Ydm');

            $token = $this->CI->security->xss_clean($host . $ip . $agent . $date);
            if($this->CI->hash->is_equals($token, $this->CI->session->userdata('auth_user_token'))) {
                return true;
            }

            $this->logout();
        }

        return false;
    }

    /**
     * Checks whether the guest not is authenticated.
     *
     * @return bool
     */
    public function cannot()
    {
        return (!$this->can()) ? true : false;
    }

    /**
     * Redirect client if it tries to access a route that needs
     * authentication.
     *
     * @param string $access
     * @param string $redirect_to
     *
     * @return mixed HttpResponse
     */
    public function who_see($access, $redirect_to = '/')
    {
        switch($access) {
            case 'auth':
                if ($this->can()) {
                    return true; // Actions here...
                }

                redirect($redirect_to);
                break;
            case 'noauth':
                if ($this->cannot()) {
                    return true; // Actions here...
                }

                redirect($redirect_to);
                break;
            default:
                throw new InvalidArgumentException('Invalid access type.');
        }
    }

    /**
     * Destroy the user data session.
     *
     * @param string $redirect_to
     *
     * @return HttpResponse
     */
    public function logout($redirect_to = '/')
    {
        $this->CI->session->sess_destroy();
        if ($this->CI->session->has_userdata('auth_user_status')) {
            $this->CI->session->unset_userdata([
                'auth_user_id',
                'auth_user_name',
                'auth_user_lastname',
                'auth_user_email',
                'auth_user_status',
                'auth_user_token'
            ]);

            $this->CI->session->sess_destroy();
        }

        redirect($redirect_to);
    }

    /**
     * Register a new user.
     *
     * @return Auth
     */
    public function register()
    {
        if ($this->CI->user_form_request->run()) {
            $data = $this->CI->input->post();

            $status = $this->CI->user->set_name($data['name'])
                ->set_lastname($data['lastname'])
                ->set_email($data['email'])
                ->set_password($data['password'])
                ->save();

            if ($status) {
                return null;
            }
        }

        $this->errors = $this->CI->user_form_request->fails();
        return $this;
    }

    /**
     * Retrieve all data of current user.
     *
     * @return object
     */
    public function get_user_data()
    {
        $obj = new stdClass();
        $obj->id = $this->CI->session->auth_user_id;
        $obj->name = $this->CI->session->auth_user_name;
        $obj->lastname = $this->CI->session->auth_user_lastname;
        $obj->email = $this->CI->session->auth_user_email;
        return $obj;
    }

    /**
     * Returns validation errors.
     *
     * @return array
     */
    public function errors()
    {
        return $this->errors;
    }

}
