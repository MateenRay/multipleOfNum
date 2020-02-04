<?php


namespace App;
use CheckForMultipleNum;
use PHPUnit\Framework\TestCase;

class CheckForMultipleNumTest extends TestCase
{
    private $check;

     public function setUp()
     {
         $this->check = new CheckForMultipleNum();
     }

    public function  testCheckFor3()
    {
        $this->assertEquals(0,$this->check->calc(0,3));
        $this->assertEquals(0,$this->check->calc(15,3));
        $this->assertEquals(0,$this->check->calc(99,3));
        $this->assertEquals(0,$this->check->calc(20,3));
    }

    public function  testCheckFor5()
    {
        $this->assertEquals(0,$this->check->calc(15,5));
        $this->assertEquals(0,$this->check->calc(30,5));
        $this->assertEquals(0,$this->check->calc(45,5));
        $this->assertEquals(0,$this->check->calc(7,5));
    }

    public function  testCheckFor3n5()
    {
        $this->assertEquals(0,$this->check->calc(5,3,5));
        $this->assertEquals(0,$this->check->calc(40,3,5));
        $this->assertEquals(0,$this->check->calc(75,3, 5));
        $this->assertEquals(0,$this->check->calc(22,3, 5));
    }
}
