<?php
namespace App\CreationalPatterns\Builder\Computer\MotherBoard\MainPart;

class CPU
{

    /**
     * CPU constructor.
     * @param float $speed
     */
    public function __construct(private float $speed)
    {
    }

    /**
     * @return float
     */
    public function getSpeed(): float
    {
        return $this->speed;
    }

}