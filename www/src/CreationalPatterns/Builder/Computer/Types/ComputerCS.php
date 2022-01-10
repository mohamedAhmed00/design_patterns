<?php
namespace App\CreationalPatterns\Builder\Computer\Types;

use App\CreationalPatterns\Builder\Computer\CoolingSystem;

class ComputerCS extends Computer implements ICoolingSystem
{
    private CoolingSystem $coolingSystem;

    public function turnOn(): bool
    {
        return true;
    }

    public function turnOff(): bool
    {
        return true;
    }

    public function callDown(int $temp): bool {
        return true;
    }

    /**
     * @param CoolingSystem $coolingSystem
     */
    public function setCoolingSystem(CoolingSystem $coolingSystem): void
    {
        $this->coolingSystem = $coolingSystem;
    }

}