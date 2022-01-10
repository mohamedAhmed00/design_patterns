<?php
namespace App\StructuralPatterns\Pridge\VehicleExample;

abstract class Vehicle
{

    /**
     * Vehicle constructor.
     * @param Component $component
     */
    public function __construct(protected Component $component)
    {
    }

    abstract public function move();

}