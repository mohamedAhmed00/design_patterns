<?php
namespace App\CreationalPatterns\Builder\Computer;

class UPS
{

    /**
     * UPS constructor.
     * @param int $duration
     */
    public function __construct(private int $duration)
    {
    }

    /**
     * @return int
     */
    public function getDuration(): int
    {
        return $this->duration;
    }

}