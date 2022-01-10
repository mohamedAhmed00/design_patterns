<?php
namespace App\CreationalPatterns\AbstractFactory\AmadeusProvider;

use App\CreationalPatterns\AbstractFactory\AbstractSeatMap;
use App\CreationalPatterns\AbstractFactory\AmadeusProvider\Services\SeatMapService;
use App\CreationalPatterns\AbstractFactory\Service;

final class SeatMapFactory extends AbstractSeatMap
{
    public function getSeatMapObject() : Service
    {
        return new SeatMapService();
    }
}