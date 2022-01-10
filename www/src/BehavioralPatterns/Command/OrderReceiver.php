<?php

namespace App\BehavioralPatterns\Command;

class OrderReceiver
{

    private array $logs = [];

    public function placeOrder(){
        $this->logs[] = "customer placed the order";
    }

    public function getOrder(){
        $this->logs[] = "worker receive the order";
    }

    public function prepareOrder(){
        $this->logs[] = "worker prepare the order";
    }

    public function deliveryOrder(){
        $this->logs[] = "delivery man deliver the order";
    }

    public function endOrder(){
        $this->logs[] = "employee end the order";
    }

    public function getLogs(){
        return $this->logs;
    }
}