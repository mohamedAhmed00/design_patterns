<?php

namespace App\BehavioralPatterns\Strategy;

class Lion implements AnimalStrategy
{
    public function run()
    {
        return 'Lion Run Algorithm';
    }
}