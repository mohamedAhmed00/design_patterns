<?php
namespace App\CreationalPatterns\AbstractFactory\TravelPortProvider;

use App\CreationalPatterns\AbstractFactory\AbstractSeatMap;
use App\CreationalPatterns\AbstractFactory\Service;
use App\CreationalPatterns\AbstractFactory\TravelPortProvider\Services\SeatMapService;

final class SeatMapFactory extends AbstractSeatMap
{
    public function getSeatMapObject() : Service
    {
        return new SeatMapService();
    }
}