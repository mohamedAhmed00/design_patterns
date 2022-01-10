<?php

namespace App\BehavioralPatterns\Visitor;

class EgyptVisitor implements IVehicleVisitor
{

    public function carVisitor(Car $car)
    {
        return 'this visitor from egypt to ' . $car->getName();
    }

    public function airCraftVisitor(AirCraft $airCraft)
    {
        return 'this visitor from egypt to ' . $airCraft->getName();
    }

    public function trainVisitor(Train $train)
    {
        return 'this visitor from egypt to ' . $train->getName();
    }
}