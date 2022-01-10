<?php

namespace App\BehavioralPatterns\Observer\Observers;

class Defender extends Player
{
    public function celebrate(): string
    {
        return "wow , good goal from Defender";
    }
}