<?php
namespace App\BehavioralPatterns\ChainOfResponsibility;

class HttpHandler extends IRequestHandler
{
    public function __construct(private string $protocol)
    {
    }

    public function handler(){
        if ($this->protocol == 'https'){
            return $this->next->handler();
        }
        return 'not valid protocol';
    }
}