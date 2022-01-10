<?php
namespace App\CreationalPatterns\Builder\Builders;

use App\CreationalPatterns\Builder\Computer\CoolingSystem;
use App\CreationalPatterns\Builder\Computer\Keyboard;
use App\CreationalPatterns\Builder\Computer\Monitor;
use App\CreationalPatterns\Builder\Computer\MotherBoard\MotherBoard;
use App\CreationalPatterns\Builder\Computer\Mouse;
use App\CreationalPatterns\Builder\Computer\Types\Computer;
use App\CreationalPatterns\Builder\Computer\UPS;

abstract class Builder
{
    protected $computer;

    abstract protected function buildMotherBoard(): MotherBoard;
    abstract protected function buildKeyboard(): Keyboard;
    abstract protected function buildMouse(): Mouse;
    abstract protected function buildMonitor(): Monitor;
    abstract protected function buildCoolingSystem(): CoolingSystem;
    abstract public function getComputer(): Computer;
}