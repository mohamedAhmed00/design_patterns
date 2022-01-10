<?php

namespace App\BehavioralPatterns\Iterator;

use DateTime;

class Flight
{
    public function __construct(private DateTime $date, private string $destination, private string $origin, private int $price)
    {
    }

    public function getDate()
    {
        return $this->date;
    }

    public function getDestination()
    {
        return $this->destination;
    }

    public function getOrigin()
    {
        return $this->origin;
    }

    public function getPrice()
    {
        return $this->price;
    }
}