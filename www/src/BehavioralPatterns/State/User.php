<?php

namespace App\BehavioralPatterns\State;

class User
{
    public function __construct(private string $name, private $address)
    {
    }
}