<?php

namespace App\BehavioralPatterns\Observer\Observers;

class Attacker extends Player
{
    public function celebrate(): string
    {
        return "wow , good goal from Attacker";
    }
}