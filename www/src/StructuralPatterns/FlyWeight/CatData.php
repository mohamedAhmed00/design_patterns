<?php
namespace App\StructuralPatterns\FlyWeight;

class CatData
{
    public function __construct(private string $image, private string $size, private string $eyes)
    {
    }

    public function getCatData(): self{
        return $this;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @return string
     */
    public function getSize(): string
    {
        return $this->size;
    }

    /**
     * @return string
     */
    public function getEyes(): string
    {
        return $this->eyes;
    }
    
}