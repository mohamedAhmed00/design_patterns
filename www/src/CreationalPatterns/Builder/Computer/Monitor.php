<?php
namespace App\CreationalPatterns\Builder\Computer;

class Monitor
{

    /**
     * Monitor constructor.
     * @param string $resolution
     */
    public function __construct(private string $resolution)
    {
    }

    /**
     * @return string
     */
    public function getResolution(): string
    {
        return $this->resolution;
    }
}