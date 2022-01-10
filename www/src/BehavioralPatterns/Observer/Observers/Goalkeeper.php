<?php

namespace App\BehavioralPatterns\Observer\Observers;

class Goalkeeper extends Player
{
    public function celebrate(): string
    {
        return "wow , good goal from Goalkeeper";
    }
}