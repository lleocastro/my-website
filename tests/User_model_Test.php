<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use \PHPUnit_Framework_TestCase as TestCase;

class User_model_Test extends TestCase
{
    /**
     * Reference to CodeIgniter instance
     *
     * @var object
     */
    protected $CI = null;

    /**
     * Load necessary resources.
     */
    public function setUp()
    {
        $this->CI =& get_instance();
        $this->CI->load->model('User_model', 'user_model');
    }

    /**
     * @test
     */
    public function test_save_a_new_user()
    {
        $this->assertTrue(
            $this->CI->user_model->set_name('Léo')
                ->set_last_name('Castro')
                ->set_email('leonardo_carvalho@outlook.com')
                ->set_password('secret123')
                ->save()
        );
    }

}
