<?php
namespace App\CreationalPatterns\Pool;

class PoolComputer
{
    private $freeComputer = [];
    private $bussyComputer = [];

    public function rentComputer(){
        if (count($this->freeComputer) == 0){
            $computer = (new Computer())->getComputer();
        }
        else
        {
            $computer = array_pop($this->freeComputer);
        }
        $this->bussyComputer[spl_object_hash($computer)] = $computer;
        return $computer;
    }

    public function freeComputer(\App\CreationalPatterns\Builder\Computer\Types\Computer $computer){
        $hash_id = spl_object_hash($computer);
        if (array_key_exists($hash_id,$this->bussyComputer)){
            unset($this->bussyComputer[$hash_id]);
            $this->freeComputer[$hash_id] = $computer;
        }
    }

    /**
     * @return array
     */
    public function getFreeComputer(): array
    {
        return $this->freeComputer;
    }

    /**
     * @return array
     */
    public function getBussyComputer(): array
    {
        return $this->bussyComputer;
    }

    public function getCoumputersCount() : int
    {
        return count($this->freeComputer) + count($this->bussyComputer);
    }
}