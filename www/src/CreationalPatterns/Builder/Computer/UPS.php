<?php
namespace App\CreationalPatterns\Builder\Computer;

class UPS
{
    private int $duration;

    /**
     * UPS constructor.
     * @param int $duration
     */
    public function __construct(int $duration)
    {
        $this->duration = $duration;
    }

    /**
     * @return int
     */
    public function getDuration(): int
    {
        return $this->duration;
    }

}