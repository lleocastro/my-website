<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use \PHPUnit_Framework_TestCase as TestCase;

class Example_Test extends TestCase
{
    /**
     * @test
     */
    public function testIfBasePathIsDefined()
    {
        $this->assertTrue(defined('BASEPATH'));
    }

}
