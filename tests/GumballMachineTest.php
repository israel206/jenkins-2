<?php

require 'GumballMachine.php';

use PHPUnit\Framework\TestCase;

class GumballMachineTest extends TestCase
{
    public $gumballMachineInstance;

    public function setUp()
    {
        $this->gumballMachineInstance = new GumballMachine();
    }

    public function testIfWheelWorks()
    {
        $this->gumballMachineInstance->setGumball(100);

        $this->gumballMachineInstance->turnWhee();

        $this->assertEquals(99, $this->gumballMachineInstance->getGumball());

    }
}
