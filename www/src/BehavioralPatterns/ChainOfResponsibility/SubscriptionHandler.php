<?php
namespace App\BehavioralPatterns\ChainOfResponsibility;

class SubscriptionHandler extends IRequestHandler
{
    public function handler(){
        if ($this->validSubscription()){
            return "done";
        }
        return 'not valid subscription';
    }

    private function validSubscription(){
        return true;
    }
}