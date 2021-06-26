<?php
namespace App\StructuralPatterns\Pridge\VehicleExample;

abstract class Vehicle
{

    protected Component $component;

    /**
     * Vehicle constructor.
     * @param Component $component
     */
    public function __construct(Component $component)
    {
        $this->component = $component;
    }

    abstract public function move();

}