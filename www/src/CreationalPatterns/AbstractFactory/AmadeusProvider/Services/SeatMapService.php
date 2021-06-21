<?php
namespace App\CreationalPatterns\AbstractFactory\AmadeusProvider\Services;

use App\CreationalPatterns\AbstractFactory\Service;

final class SeatMapService implements Service
{
    public function request()
    {
        return "Amadeus SeatMap Request ";
    }

    public function response()
    {
        return "Amadeus SeatMap Response ";
    }

}