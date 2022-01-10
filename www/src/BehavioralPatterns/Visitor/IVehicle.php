<?php

namespace App\BehavioralPatterns\Visitor;

interface IVehicle
{
    public function accept(IVehicleVisitor $visitor);
}