<?php
namespace App\CreationalPatterns\Builder\Computer\MotherBoard\MainPart;

class RAM
{

    /**
     * RAM constructor.
     * @param int $size
     */
    public function __construct(private int $size)
    {
    }

    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }
}