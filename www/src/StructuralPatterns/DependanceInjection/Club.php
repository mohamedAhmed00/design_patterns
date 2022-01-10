<?php
namespace App\StructuralPatterns\DependanceInjection;

class Club
{

    /**
     * Club constructor.
     */
    public function __construct(private Player $player)
    {
    }

    public function assignPlayerToClup(){
        $this->addPlayer(
            $this->player->getName(),
            $this->player->getAge(),
            $this->player->getAddress(),
            $this->player->type();
        );
    }

    private function addPlayer($name,$gae,$address,$type){
        echo "save this player to database";
    }

    /**
     * @param Player $player
     */
    public function setPlayer(Player $player): void
    {
        $this->player = $player;
    }
}