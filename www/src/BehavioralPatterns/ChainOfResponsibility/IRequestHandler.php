<?php
namespace App\BehavioralPatterns\ChainOfResponsibility;

abstract class IRequestHandler
{
    public function setNext(IRequestHandler $next){
        $this->next = $next;
    }

    abstract public function handler();
}