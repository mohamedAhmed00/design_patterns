<?php

use App\BehavioralPatterns\Strategy\AnimalContext;
use App\BehavioralPatterns\Strategy\Cat;
use App\BehavioralPatterns\Strategy\Lion;
use \PHPUnit\Framework\TestCase;

class StrategyTest extends TestCase
{
    public function testCanLionRun()
    {
        $animalContext = new AnimalContext(new Lion());
        $this->assertEquals('Lion Run Algorithm', $animalContext->AnimalRun());
    }

    public function testCanCatRun()
    {
        $animalContext = new AnimalContext(new Cat());
        $this->assertEquals('Cat Run Algorithm', $animalContext->AnimalRun());
    }
}
