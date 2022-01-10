<?php

namespace App\BehavioralPatterns\State;

class CancelledState extends State
{
    protected string $state = 'Cancelled';

    public function proceed()
    {
        $this->nextStatus(new TerminateState());
        return 'Not Correct Booking';
    }
}