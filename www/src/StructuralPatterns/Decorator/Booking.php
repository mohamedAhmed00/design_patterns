<?php
namespace App\StructuralPatterns\Decorator;

interface Booking
{
    public function calculatePrice(): float;
}