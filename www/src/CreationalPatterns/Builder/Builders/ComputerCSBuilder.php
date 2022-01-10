<?php
namespace App\CreationalPatterns\Builder\Builders;

use App\CreationalPatterns\Builder\Computer\CoolingSystem;
use App\CreationalPatterns\Builder\Computer\Keyboard;
use App\CreationalPatterns\Builder\Computer\Monitor;
use App\CreationalPatterns\Builder\Computer\MotherBoard\MainPart\CPU;
use App\CreationalPatterns\Builder\Computer\MotherBoard\MainPart\Disk;
use App\CreationalPatterns\Builder\Computer\MotherBoard\MainPart\GPU;
use App\CreationalPatterns\Builder\Computer\MotherBoard\MainPart\NetworkCard;
use App\CreationalPatterns\Builder\Computer\MotherBoard\MainPart\RAM;
use App\CreationalPatterns\Builder\Computer\MotherBoard\MainPart\Sockets;
use App\CreationalPatterns\Builder\Computer\MotherBoard\MotherBoard;
use App\CreationalPatterns\Builder\Computer\MotherBoard\Sockets\CType;
use App\CreationalPatterns\Builder\Computer\MotherBoard\Sockets\USB;
use App\CreationalPatterns\Builder\Computer\Mouse;
use App\CreationalPatterns\Builder\Computer\Types\Computer;
use App\CreationalPatterns\Builder\Computer\Types\ComputerCS;
use App\CreationalPatterns\Builder\Computer\UPS;

class ComputerCSBuilder extends Builder
{
    protected function buildMotherBoard(): MotherBoard
    {
        $cpu  = new CPU(5.6);
        $disk = new Disk("ssd");
        $gpu  = new GPU(7);
        $ram  = new RAM(16);
        $network_card = new NetworkCard(3);
        $socket = new Sockets([
            new USB(3),
            new USB(5),
            new CType(true),
            new CType(false)
        ]);
        return new MotherBoard($cpu,$ram,$gpu,$socket,$network_card,$disk);
    }

    protected function buildKeyboard(): Keyboard
    {
        return new Keyboard(true);
    }

    protected function buildMouse(): Mouse
    {
        return new Mouse(true);
    }

    protected function buildMonitor(): Monitor
    {
        return new Monitor('1024 FHD');
    }

    protected function buildCoolingSystem(): CoolingSystem
    {
        return new CoolingSystem(5);
    }

    public function getComputer(): Computer{
        $computer = new ComputerCS();
        $computer->setCoolingSystem($this->buildCoolingSystem());
        $computer->setKeyboard($this->buildKeyboard());
        $computer->setMonitor($this->buildMonitor());
        $computer->setMouse($this->buildMouse());
        $computer->setMotherBoard($this->buildMotherBoard());
        return $computer;
    }

}