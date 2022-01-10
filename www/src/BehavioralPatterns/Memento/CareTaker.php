<?php

namespace App\BehavioralPatterns\Memento;

class CareTaker
{
    private array $snapshots = [];

    public function __construct(private Originator $originator)
    {
    }

    public function save()
    {
        $this->snapshots[] = $this->originator->save();
    }

    public function rollBack()
    {
        $snapshot = array_pop($this->snapshots);
        $this->originator->undo($snapshot);
    }
}