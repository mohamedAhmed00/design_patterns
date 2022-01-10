<?php
namespace App\StructuralPatterns\FlyWeight;

class Cat
{
    public function __construct(private string $name, private int $age, private CatData $catData)
    {
    }

    /**
     * @return CatData
     */
    public function getCatData(): CatData
    {
        return $this->catData;
    }

    public function getCat() : array{
        $cat_shared_state = $this->catData->getCatData();
        return [
            'name' => $this->name,
            'age' => $this->age,
            'size' => $cat_shared_state->getSize(),
            'image' => $cat_shared_state->getImage(),
            'eyes' => $cat_shared_state->getEyes(),
        ];
    }

}