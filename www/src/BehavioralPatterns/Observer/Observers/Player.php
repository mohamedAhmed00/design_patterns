<?php

namespace App\BehavioralPatterns\Observer\Observers;

abstract class Player implements IObservable
{
    public function __construct(protected int $id,protected string $name,protected int  $age)
    {
    }

    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function getAge(){
        return $this->age;
    }
}