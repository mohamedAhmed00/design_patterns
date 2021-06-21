<?php
namespace App\CreationalPatterns\Builder\Computer\MotherBoard\MainPart;

class GPU
{
    private int $size;

    /**
     * GPU constructor.
     * @param int $size
     */
    public function __construct(int $size)
    {
        $this->size = $size;
    }

    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }
}