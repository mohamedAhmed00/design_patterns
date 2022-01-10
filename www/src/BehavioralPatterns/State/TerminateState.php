<?php

namespace App\BehavioralPatterns\State;

class TerminateState extends State
{
    protected string $state = 'Terminate';

    public function proceed()
    {
        return 'end the booking';
    }

    public function nextStatus(State $state)
    {
        return 'end the booking';
    }
}