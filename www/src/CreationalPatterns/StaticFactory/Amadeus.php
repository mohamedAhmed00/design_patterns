<?php
namespace App\CreationalPatterns\StaticFactory;

class Amadeus implements Provider {

    public function __construct(public $params)
    {

    }

    public function search()
    {
        // TODO: Implement search() method.
    }

    public function getPrice()
    {
        // TODO: Implement getPrice() method.
    }

    public function seatMap()
    {
        // TODO: Implement seatMap() method.
    }

    public function book()
    {
        // TODO: Implement book() method.
    }
}