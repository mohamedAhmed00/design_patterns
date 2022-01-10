<?php
namespace App\StructuralPatterns\FlyWeight;

class CatFactory
{
    private array $catData = [];

    public function addCat(string $name, int $age, string $image, string $size, string $eyes){
        $catData = $this->getCatData($image, $size,$eyes);
        return new Cat($name, $age, $catData);
    }

    public function getCatData(string $image, string $size, string $eyes){
        $key = md5($image . $size . $eyes);
        if(array_key_exists($key , $this->catData)) {
            return $this->catData[$key];
        }
        return $this->catData[$key] = new CatData($image, $size,$eyes);
    }
}