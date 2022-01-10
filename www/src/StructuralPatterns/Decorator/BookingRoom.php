<?php
namespace App\StructuralPatterns\Decorator;

class BookingRoom implements Booking
{
    public function calculatePrice(): float
    {
        return 20.5 ;
    }
}