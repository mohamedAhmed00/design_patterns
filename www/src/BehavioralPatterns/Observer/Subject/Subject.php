<?php
namespace App\BehavioralPatterns\Observer\Subject;

use App\BehavioralPatterns\Observer\Observers\IObservable;

interface Subject {

    public function register(IObservable $observable);

    public function remove(IObservable $observable);

    public function notify();
}