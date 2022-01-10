<?php

namespace App\BehavioralPatterns\Mediator;

abstract class AbstractUser
{
    public function __construct(protected Director $director)
    {
    }
}