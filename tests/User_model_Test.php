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
        $this->CI->load->model('User_model', 'user');
    }

    /**
     * @test
     */
    public function test_save_a_new_user()
    {
        $this->assertTrue(
            $this->CI->user->set_name(substr(base64_encode(uniqid(mt_rand(), true)), 1, 8))
                ->set_last_name('Example')
                ->set_email('example_'. substr(base64_encode(uniqid(mt_rand(), true)), 0, 7) .'@domain.com')
                ->set_password('secret2017')
                ->save()
        );
    }

    /**
     * @test
     */
    public function test_find_user()
    {
        $this->assertTrue(
            $this->CI->user->find('leonardo_carvalho@outlook.com')
        );
    }

}
