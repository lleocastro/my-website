<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use \PHPUnit_Framework_TestCase as TestCase;

class Email_list_Test extends TestCase
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
        $this->CI->load->model('Email_list_model', 'email_model');
    }

    /**
     * @test
     */
    public function test_get_email_in_list()
    {
        $this->assertTrue($this->CI->email_model->exists('leonardo_carvalho@outlook.com'));
    }

    /**
     * @test
     */
    public function test_save_email_in_list()
    {
        $x = substr(base64_encode(uniqid(mt_rand(), true)), 0, 17);
        $email = "{$x}@example.com";
        $this->assertTrue($this->CI->email_model->set_email($email)->save());
    }

    /**
     * @test
     */
    public function test_not_find_email()
    {
        $email = "error@xxx.br";
        $this->assertNull($this->CI->email_model->find(0));
    }

    /**
     * @test
     * @expectedException \InvalidArgumentException
     */
    public function test_exception_in_invalid_data_save()
    {
        $this->CI->email_model->set_email('')->save();
    }

}
