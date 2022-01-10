<?php

namespace App\BehavioralPatterns\Memento;

class ConcreteMemento implements MementoInterface
{

    public function __construct(private Editor $editor)
    {
    }

    public function getSnapShot()
    {
        return $this->editor;
    }
}