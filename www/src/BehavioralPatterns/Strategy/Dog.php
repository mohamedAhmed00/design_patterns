<?php

namespace App\BehavioralPatterns\Strategy;

class Dog implements AnimalStrategy
{
    public function run()
    {
        return 'Dog Run Algorithm';
    }
}