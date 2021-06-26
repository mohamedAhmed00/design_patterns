<?php
namespace App\StructuralPatterns\Pridge\VehicleExample;

abstract class Component
{
    protected string $name;
    protected string $specifications;

    /**
     * Component constructor.
     * @param string $name
     * @param string $specifications
     */
    public function __construct(string $name, string $specifications)
    {
        $this->name = $name;
        $this->specifications = $specifications;
    }

    abstract public function calculateUsage();
}