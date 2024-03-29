<?php
//Filename: JustToCheckMockeryTest.php

require_once '../vendor/autoload.php';

class JustToCheckMockeryTest extends PHPUnit_Framework_TestCase
{

    protected function tearDown()
    {
        \Mockery::close();
    }


    function testMockeryWorks()
    {
        $mock = \Mockery::mock('AClassToBeMocked');
        $mock->shouldReceive('someMethod')->once();

        $workerObject = new AClassToWorkWith;
        $workerObject->doSomethingWit($mock);
    }
}

class AClassToBeMocked
{
}

class AClassToWorkWith
{

    function doSomethingWit($anotherClass)
    {
        return $anotherClass->someMethod();
    }

}