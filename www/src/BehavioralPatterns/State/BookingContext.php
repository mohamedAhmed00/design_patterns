<?php

namespace App\BehavioralPatterns\State;

class BookingContext
{
    private State $state;

    public function __construct(private User $user)
    {
    }

    public function placeOrder()
    {
        $this->state = new BookingState();
        $this->state->setBookingContext($this);
        $this->state->proceed();
    }

    public function setStatus(State $state)
    {
        $this->state = $state;
    }

    public function getState(): State
    {
        return $this->state;
    }

    public function bookingProceed()
    {
        $this->state->setBookingContext($this);
        $this->state->proceed();
    }

}