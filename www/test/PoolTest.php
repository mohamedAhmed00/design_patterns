<?php

use \PHPUnit\Framework\TestCase;
use \App\CreationalPatterns\Pool\PoolComputer;
use \App\CreationalPatterns\Builder\Computer\Types\ComputerCS;

class PoolTest extends TestCase
{

    private $poolComputer;

    public function setUp(): void
    {
        parent::setUp();
        $this->poolComputer = new PoolComputer();
    }

    public function testCanRentComputer(){
        $computer = $this->poolComputer->rentComputer();
        $this->assertInstanceOf(ComputerCS::class,$computer);
        $this->assertEquals(1,$this->poolComputer->getCoumputersCount());
    }

    public function testCanFreeComputer(){
        $computer = $this->poolComputer->rentComputer();
        $this->poolComputer->freeComputer($computer);
        $this->assertEquals(1,$this->poolComputer->getCoumputersCount());
    }

}
