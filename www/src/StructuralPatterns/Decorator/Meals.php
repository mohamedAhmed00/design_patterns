<?php
namespace App\StructuralPatterns\Decorator;

class Meals extends BookingDecorator
{
    private float $extraPrice = 30.0;

    public function calculatePrice(): float
    {
        return $this->booking->calculatePrice() + $this->extraPrice;
    }

}