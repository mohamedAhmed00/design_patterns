<?php
namespace App\CreationalPatterns\Builder\Computer\MotherBoard\MainPart;

class CPU
{
    private float $speed;

    /**
     * CPU constructor.
     * @param float $speed
     */
    public function __construct(float $speed)
    {
        $this->speed = $speed;
    }

    /**
     * @return float
     */
    public function getSpeed(): float
    {
        return $this->speed;
    }

}