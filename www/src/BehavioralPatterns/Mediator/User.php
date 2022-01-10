<?php

namespace App\BehavioralPatterns\Mediator;

class User extends AbstractUser
{
    public function sendMessage(string $message)
    {
        $this->director->notify($this, 'sendMessage', $message);
    }
}