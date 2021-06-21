<?php
namespace App\CreationalPatterns\Builder\Computer;

class CoolingSystem
{
    private int $lowTempLimit;

    /**
     * CoolingSystem constructor.
     * @param int $lowTempLimit
     */
    public function __construct(int $lowTempLimit)
    {
        $this->lowTempLimit = $lowTempLimit;
    }

    /**
     * @return int
     */
    public function getLowTempLimit(): int
    {
        return $this->lowTempLimit;
    }
}