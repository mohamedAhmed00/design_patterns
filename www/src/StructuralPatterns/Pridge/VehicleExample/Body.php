<?php
namespace App\StructuralPatterns\Pridge\VehicleExample;

class Body extends Component
{

    /**
     * Engine constructor.
     */
    public function __construct(string $name, string $specifications)
    {
        parent::__construct($name,$specifications);
    }

    public function calculateUsage()
    {
        return 7;
    }

}