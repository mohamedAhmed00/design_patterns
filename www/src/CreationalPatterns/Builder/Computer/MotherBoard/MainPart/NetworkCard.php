<?php
namespace App\CreationalPatterns\Builder\Computer\MotherBoard\MainPart;

class NetworkCard
{

    /**
     * NetworkCard constructor.
     * @param int $category
     */
    public function __construct(private int $category)
    {
    }

    /**
     * @return int
     */
    public function getCategory(): int
    {
        return $this->category;
    }
}