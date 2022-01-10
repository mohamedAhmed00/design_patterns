<?php
namespace App\StructuralPatterns\Composite;

interface IPrice
{
    public function calculatePrice() : float;
}