<?php
namespace App\StructuralPatterns\Pridge\VehicleExample;

class Car extends Vehicle
{

    protected Component $component;

    /**
     * Vehicle constructor.
     * @param Component $component
     */
    public function __construct(Component $component)
    {
        parent::__construct($component);
    }

    public function move()
    {
        echo $this->component->calculateUsage();
    }

}