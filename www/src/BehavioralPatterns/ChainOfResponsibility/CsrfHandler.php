<?php
namespace App\BehavioralPatterns\ChainOfResponsibility;

class CsrfHandler extends IRequestHandler
{
    public function __construct( private string $csrfCode)
    {
    }

    public function handler(){
        if ($this->getCsrfCode() == $this->csrfCode){
            return $this->next->handler();
        }
        return 'not valid csrf';
    }

    private function getCsrfCode(){
        return '123456';
    }
}