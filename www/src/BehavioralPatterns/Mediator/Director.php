<?php

namespace App\BehavioralPatterns\Mediator;

abstract class Director
{
    abstract public function notify(AbstractUser $sender, $event, $data);
}