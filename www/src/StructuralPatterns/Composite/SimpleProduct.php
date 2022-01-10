<?php
namespace App\StructuralPatterns\Composite;

class SimpleProduct implements IPrice
{
    /**
     * ComlexProduct constructor.
     * @param float $price
     * @param string $name
     */
    public function __construct(private float $price, private string $name)
    {
    }


    public function calculatePrice(): float
    {
        return $this->price;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }
}