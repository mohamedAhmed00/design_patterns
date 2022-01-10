<?php

namespace App\BehavioralPatterns\Strategy;

class Cat implements AnimalStrategy
{
    public function run()
    {
        return 'Cat Run Algorithm';
    }
}