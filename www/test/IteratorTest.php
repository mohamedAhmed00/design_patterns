<?php

use App\BehavioralPatterns\Iterator\Flight;
use App\BehavioralPatterns\Iterator\FlightCollections;
use \PHPUnit\Framework\TestCase;

class IteratorTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testCanIterateForCollectionOfFlights()
    {
        $first = new Flight( new DateTime('2021-03-01T15:03:01.012345Z'), 'alex', 'aswan', 200);
        $second = new Flight( new DateTime('2021-01-01T15:03:01.012345Z'), 'cairo', 'mina', 100);
        $third = new Flight( new DateTime('2021-05-01T15:03:01.012345Z'), 'assuit', 'aswan', 160);
        $flightCollection = new FlightCollections();
        $flightCollection->addFlight($first);
        $flightCollection->addFlight($second);
        $flightCollection->addFlight($third);
        $listOfFlights = [];
        foreach ($flightCollection as $flight)
        {
            $listOfFlights[] = $flight;
        }
        $this->assertEquals($listOfFlights,[$second, $third, $first]);
    }
}
