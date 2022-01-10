<?php
namespace App\StructuralPatterns\Pridge\VehicleExample;

abstract class Component
{

    /**
     * Component constructor.
     * @param string $name
     * @param string $specifications
     */
    public function __construct(protected string $name, protected string $specifications)
    {
    }

    abstract public function calculateUsage();
}