<?php
namespace App\CreationalPatterns\Pool;

use App\CreationalPatterns\Builder\Builders\ComputerCSBuilder;
use App\CreationalPatterns\Builder\Director;

class Computer
{
    private $rentAt;

    private $computer;

    public function __construct()
    {
        $this->rentAt = new \DateTime();
        $this->computer = (new Director(new ComputerCSBuilder()))->makeComputer();
    }

    /**
     * @return \DateTime
     */
    public function getRentAt(): \DateTime
    {
        return $this->rentAt;
    }

    public function getComputer(){
        return $this->computer;
    }
}