<?php

namespace App\BehavioralPatterns\Strategy;

class Monkey implements AnimalStrategy
{
    public function run()
    {
        return 'Monkey Run Algorithm';
    }
}