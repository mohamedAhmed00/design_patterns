<?php
namespace App\CreationalPatterns\Builder\Computer\MotherBoard\MainPart;

class NetworkCard
{
    private int $category;

    /**
     * NetworkCard constructor.
     * @param int $category
     */
    public function __construct(int $category)
    {
        $this->category = $category;
    }

    /**
     * @return int
     */
    public function getCategory(): int
    {
        return $this->category;
    }
}