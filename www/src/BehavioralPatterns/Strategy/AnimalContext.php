<?php

namespace App\BehavioralPatterns\Strategy;

class AnimalContext
{
    public function __construct(private AnimalStrategy $strategy)
    {
    }

    public function setStrategy(AnimalStrategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function AnimalRun()
    {
        return $this->strategy->run();
    }
}