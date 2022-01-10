<?php

use App\BehavioralPatterns\State\BookingContext;
use App\BehavioralPatterns\State\User;
use \PHPUnit\Framework\TestCase;

class StateTest extends TestCase
{
    private BookingContext $bookingContext;

    public function setUp(): void
    {
        parent::setUp();
        $this->bookingContext = new BookingContext(new User('nader','cairo'));
    }

    public function testCanUserPlaceSuccessBooking()
    {
        $this->bookingContext->placeOrder();
        $this->assertEquals('Accepted', $this->bookingContext->getState()->getState());
    }

    public function testCanUserPlaceAcceptedBooking()
    {
        $this->bookingContext->placeOrder();
        $this->bookingContext->bookingProceed();
        $this->bookingContext->bookingProceed();
        $this->assertEquals('Terminate', $this->bookingContext->getState()->getState());
    }
}
