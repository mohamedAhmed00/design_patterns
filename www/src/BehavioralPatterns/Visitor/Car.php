<?php

namespace App\BehavioralPatterns\Visitor;

class Car implements IVehicle
{
    public function __construct(private string $name)
    {
    }

    public function getName()
    {
        return $this->name;
    }

    public function accept(IVehicleVisitor $visitor)
    {
        return $visitor->carVisitor($this);
    }
}