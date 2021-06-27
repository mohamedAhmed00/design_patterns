<?php
namespace App\CreationalPatterns\Builder\Computer\MotherBoard\Sockets;

class CType
{

    /**
     * CType constructor.
     * @param bool $withVideoTransfer
     */
    public function __construct(private bool $withVideoTransfer)
    {
    }

    /**
     * @return bool
     */
    public function isWithVideoTransfer(): bool
    {
        return $this->withVideoTransfer;
    }

}