<?php

namespace App\BehavioralPatterns\State;

class FinishState extends State
{
    protected string $state = 'Finish';

    public function proceed()
    {
        $this->nextStatus(new TerminateState());
        return 'Done';
    }
}