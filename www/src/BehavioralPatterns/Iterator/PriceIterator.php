<?php

namespace App\BehavioralPatterns\Iterator;

use Iterator;

class PriceIterator implements Iterator
{

    private int $index = 0;
    private array $sortedFlights = [];

    public function __construct(private FlightCollections $flightCollections)
    {
        $this->sortByPrice();
    }

    public function current()
    {
        return $this->sortedFlights[$this->index];
    }

    public function next()
    {
        $this->index++;
    }

    public function key()
    {
        return $this->index;
    }

    public function valid()
    {
        return isset($this->sortedFlights[$this->index]);
    }

    public function rewind()
    {
        $this->index = 0;
    }

    private function sortByPrice()
    {
        $prices = [];
        $this->sortedFlights = $this->flightCollections->getFlightCollections();
        foreach ($this->sortedFlights as $flight) {
            $prices[] = $flight->getPrice();
        }

        array_multisort($prices,SORT_ASC, SORT_NUMERIC, $this->sortedFlights);
    }
}