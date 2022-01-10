<?php
namespace App\StructuralPatterns\Decorator;

class Wifi extends BookingDecorator
{
    private float $extraPrice = 60.0;

    public function calculatePrice(): float
    {
        return $this->booking->calculatePrice() + $this->extraPrice;
    }

}