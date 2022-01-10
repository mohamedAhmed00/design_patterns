<?php

namespace App\BehavioralPatterns\Command;

class OrderCommand implements Command
{

    public function __construct(private OrderReceiver $orderReceiver)
    {
    }

    public function execute()
    {
        $this->orderReceiver->placeOrder();
        $this->orderReceiver->prepareOrder();
        $this->orderReceiver->deliveryOrder();
        $this->orderReceiver->endOrder();
    }
}