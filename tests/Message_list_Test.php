<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use \PHPUnit_Framework_TestCase as TestCase;

class Message_list_Test extends TestCase
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
        $this->CI->load->model('Message_list_model', 'message_model');
    }

    /**
     * @test
     */
    public function test_save_a_new_message()
    {
        $x = substr(base64_encode(uniqid(mt_rand(), true)), 0, 17);
        $this->assertTrue(
            $this->CI->message_model->set_name('Léo')
                ->set_last_name('Castro')
                ->set_email("{$x}@example.com")
                ->set_message('Oiee, testandooo...')
                ->save()
        );
    }

    /**
     * @test
     */
    public function test_not_find_message_by_id()
    {
        $this->assertNull($this->CI->message_model->find_one(0));
    }

    /**
     * @test
     * @expectedException \InvalidArgumentException
     */
    public function test_exception_in_invalid_message_save()
    {
        $this->CI->message_model->set_name('')
            ->set_last_name('')
            ->set_email('')
            ->set_message('')
            ->save();
    }

}
