<?php
namespace App\CreationalPatterns\Builder\Computer;

class CoolingSystem
{

    /**
     * CoolingSystem constructor.
     * @param int $lowTempLimit
     */
    public function __construct(private int $lowTempLimit)
    {
    }

    /**
     * @return int
     */
    public function getLowTempLimit(): int
    {
        return $this->lowTempLimit;
    }
}