<?php
namespace App\StructuralPatterns\DependanceInjection;

class Player
{

    /**
     * Player constructor.
     */
    public function __construct(private string $name , private int $age, private string $address, private string $type)
    {
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

}