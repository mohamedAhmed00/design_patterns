<?php
namespace App\CreationalPatterns\AbstractFactory\AmadeusSelfApi;

use App\CreationalPatterns\AbstractFactory\AbstractSeatMap;
use App\CreationalPatterns\AbstractFactory\AmadeusSelfApi\Services\SeatMapService;
use App\CreationalPatterns\AbstractFactory\Service;

final class SeatMapFactory extends AbstractSeatMap
{
    public function getSeatMapObject() : Service
    {
        return new SeatMapService();
    }
}