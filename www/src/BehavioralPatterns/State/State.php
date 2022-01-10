<?php

namespace App\BehavioralPatterns\State;

abstract class State
{
    protected string $state;

    private BookingContext $bookingContext;

    public function setBookingContext($bookingContext)
    {
        $this->bookingContext = $bookingContext;
    }

    abstract public function proceed();

    protected function nextStatus(State $state)
    {
        $this->getBookingContext()->setStatus($state);
    }

    public function getBookingContext()
    {
        return $this->bookingContext;
    }

    public function getState(): string
    {
        return $this->state;
    }
}