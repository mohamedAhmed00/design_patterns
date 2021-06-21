<?php
namespace App\CreationalPatterns\Builder\Computer\MotherBoard\MainPart;

class Sockets
{
    private array $sockets;

    /**
     * Sockets constructor.
     * @param array $sockets
     */
    public function __construct(array $sockets)
    {
        $this->sockets = $sockets;
    }

    /**
     * @return array
     */
    public function getSockets(): array
    {
        return $this->sockets;
    }

}