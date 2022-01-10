<?php
namespace App\CreationalPatterns\Builder\Computer;

class Keyboard
{

    /**
     * Keyboard constructor.
     * @param bool $utfSupport
     */
    public function __construct(private bool $utfSupport)
    {
    }

    /**
     * @return bool
     */
    public function isUtfSupport(): bool
    {
        return $this->utfSupport;
    }

}