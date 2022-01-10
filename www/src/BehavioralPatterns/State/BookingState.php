<?php

namespace App\BehavioralPatterns\State;

class BookingState extends State
{
    protected string $state = 'Booking';

    public function proceed()
    {
        $this->nextStatus(new AcceptedState());
        return 'Success to Booking';
    }
}