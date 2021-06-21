<?php
namespace App\CreationalPatterns\AbstractFactory\TravelPortProvider\Services;

use App\CreationalPatterns\AbstractFactory\Service;

final class SeatMapService implements Service
{
    public function request()
    {
        return "TravelPort SeatMap Request ";
    }

    public function response()
    {
        return "TravelPort SeatMap Response ";
    }

}