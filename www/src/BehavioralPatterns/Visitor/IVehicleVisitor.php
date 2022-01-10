<?php

namespace App\BehavioralPatterns\Visitor;

interface IVehicleVisitor
{
    public function carVisitor(Car $car);

    public function airCraftVisitor(AirCraft $airCraft);

    public function trainVisitor(Train $train);

}