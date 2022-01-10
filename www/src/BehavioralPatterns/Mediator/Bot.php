<?php

namespace App\BehavioralPatterns\Mediator;

class Bot extends AbstractUser
{
    public function banUser(User $user)
    {
        $this->director->notify($this, 'block', $user);
    }
}