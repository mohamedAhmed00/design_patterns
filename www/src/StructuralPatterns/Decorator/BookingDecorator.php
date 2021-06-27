<?php
namespace App\StructuralPatterns\Decorator;

abstract class BookingDecorator implements Booking
{

    public function __construct(protected Booking $booking)
    {
    }
}