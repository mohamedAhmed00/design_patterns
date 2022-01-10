<?php

namespace App\BehavioralPatterns\Observer\Subject;

use App\BehavioralPatterns\Observer\Observers\IObservable;

class Goal implements Subject
{
    private array $observers = [];

    public function register(IObservable $observable)
    {
        $this->observers[$observable->getId()] = $observable;
    }

    public function remove(IObservable $observable)
    {
        if (!empty($this->observers[$observable->getId()])){
            unset($this->observers[$observable->getId()]);
        }
    }

    public function notify(): array
    {
        $returns = [];
        foreach ($this->observers as $observer){
            $returns[] = $observer->celebrate();
        }
        return $returns;
    }
}