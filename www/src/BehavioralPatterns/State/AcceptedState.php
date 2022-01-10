<?php

namespace App\BehavioralPatterns\State;

class AcceptedState extends State
{
    protected string $state = 'Accepted';

    public function proceed()
    {
        $this->nextStatus(new FinishState());
        return 'Done';
    }
}