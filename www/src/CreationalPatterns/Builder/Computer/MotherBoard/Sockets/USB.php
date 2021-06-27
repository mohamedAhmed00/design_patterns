<?php
namespace App\CreationalPatterns\Builder\Computer\MotherBoard\Sockets;

class USB
{

    /**
     * USB constructor.
     * @param string $version
     */
    public function __construct(private string $version)
    {
    }

    /**
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }

}