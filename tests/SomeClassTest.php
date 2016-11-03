<?php

class SomeClassTest extends PHPUnit_Framework_TestCase
{

    public function testSum()
    {
        $someClass = new Some\Name\Space\SomeClass();
        $sum = $someClass->sum(1, 2);
        $this->assertEquals(3, $sum);
    }
}
