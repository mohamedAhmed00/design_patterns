<?php

namespace App\BehavioralPatterns\Iterator;

use IteratorAggregate;

class FlightCollections implements IteratorAggregate
{

    private array $flightCollections = [];

    public function getFlightCollections()
    {
        return $this->flightCollections;
    }

    public function addFlight(Flight $flight)
    {
        $this->flightCollections[] = $flight;
    }

    public function removeFlight($flight)
    {
        foreach ($this->flightCollections as $key => $flightCollection){
            if (
                $flight->getDate() === $flightCollection->getDate() &&
                $flight->getDestination() === $flightCollection->getDestination() &&
                $flight->getOrigin() === $flightCollection->getOrigin()
            )
            {
                unset($this->flightCollections[$key]);
            }
        }
    }

    public function getIterator()
    {
        return new PriceIterator($this);
    }
}