<?php
namespace App\CreationalPatterns\Builder\Computer\Types;

use App\CreationalPatterns\Builder\Computer\CoolingSystem;
use App\CreationalPatterns\Builder\Computer\UPS;

class ComputerXL extends Computer implements ICoolingSystem, IPower
{
    private CoolingSystem $coolingSystem;
    private UPS $ups;
    
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

    public function backupPower(): bool
    {
        return true;
    }

    /**
     * @param CoolingSystem $coolingSystem
     */
    public function setCoolingSystem(CoolingSystem $coolingSystem): void
    {
        $this->coolingSystem = $coolingSystem;
    }

    /**
     * @param UPS $ups
     */
    public function setUps(UPS $ups): void
    {
        $this->ups = $ups;
    }

}