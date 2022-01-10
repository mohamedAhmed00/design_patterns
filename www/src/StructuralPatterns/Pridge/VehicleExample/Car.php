<?php
namespace App\StructuralPatterns\Pridge\VehicleExample;

class Car extends Vehicle
{

    /**
     * Vehicle constructor.
     * @param Component $component
     */
    public function __construct(private Component $component)
    {
        parent::__construct($component);
    }

    public function move()
    {
        echo $this->component->calculateUsage();
    }

}