<?php
namespace App\CreationalPatterns\Builder\Computer\MotherBoard\MainPart;

class Sockets
{

    /**
     * Sockets constructor.
     * @param array $sockets
     */
    public function __construct(private array $sockets)
    {
    }

    /**
     * @return array
     */
    public function getSockets(): array
    {
        return $this->sockets;
    }

}