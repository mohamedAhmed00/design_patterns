<?php
namespace App\StructuralPatterns\Decorator;

class AirCondations extends BookingDecorator
{
    private float $extraPrice = 50.0;

    public function calculatePrice(): float
    {
        return $this->booking->calculatePrice() + $this->extraPrice;
    }

}