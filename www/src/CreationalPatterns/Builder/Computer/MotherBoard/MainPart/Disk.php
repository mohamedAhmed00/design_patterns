<?php
namespace App\CreationalPatterns\Builder\Computer\MotherBoard\MainPart;

class Disk
{
    /**
     * Disk constructor.
     * @param string $type
     */
    public function __construct(private string $type)
    {
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
}