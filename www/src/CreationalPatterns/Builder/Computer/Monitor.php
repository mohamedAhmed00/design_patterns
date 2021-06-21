<?php
namespace App\CreationalPatterns\Builder\Computer;

class Monitor
{
    private string $resolution;

    /**
     * Monitor constructor.
     * @param string $resolution
     */
    public function __construct(string $resolution)
    {
        $this->resolution = $resolution;
    }

    /**
     * @return string
     */
    public function getResolution(): string
    {
        return $this->resolution;
    }
}