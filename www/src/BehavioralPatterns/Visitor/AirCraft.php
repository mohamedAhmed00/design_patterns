<?php

namespace App\BehavioralPatterns\Visitor;

class AirCraft implements IVehicle
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
        return $visitor->airCraftVisitor($this);
    }
}