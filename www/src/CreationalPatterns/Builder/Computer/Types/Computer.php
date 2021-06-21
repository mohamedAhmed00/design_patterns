<?php
namespace App\CreationalPatterns\Builder\Computer\Types;

use App\CreationalPatterns\Builder\Computer\Keyboard;
use App\CreationalPatterns\Builder\Computer\Monitor;
use App\CreationalPatterns\Builder\Computer\MotherBoard\MotherBoard;
use App\CreationalPatterns\Builder\Computer\Mouse;

abstract class Computer
{
    protected MotherBoard $motherBoard;
    protected Keyboard $keyboard;
    protected Mouse $mouse;
    protected Monitor $monitor;

    abstract public function turnOn(): bool;

    abstract public function turnOff(): bool;

    public function dashbaord(): string {
        return '';
    }

    /**
     * @param MotherBoard $motherBoard
     */
    public function setMotherBoard(MotherBoard $motherBoard): void
    {
        $this->motherBoard = $motherBoard;
    }

    /**
     * @param Keyboard $keyboard
     */
    public function setKeyboard(Keyboard $keyboard): void
    {
        $this->keyboard = $keyboard;
    }

    /**
     * @param Mouse $mouse
     */
    public function setMouse(Mouse $mouse): void
    {
        $this->mouse = $mouse;
    }

    /**
     * @param Monitor $monitor
     */
    public function setMonitor(Monitor $monitor): void
    {
        $this->monitor = $monitor;
    }

}