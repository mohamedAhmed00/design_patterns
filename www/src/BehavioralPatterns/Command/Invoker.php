<?php

namespace App\BehavioralPatterns\Command;

class Invoker
{
    public function __construct(private Command $command)
    {
    }

    public function run(){
        $this->command->execute();
    }
}