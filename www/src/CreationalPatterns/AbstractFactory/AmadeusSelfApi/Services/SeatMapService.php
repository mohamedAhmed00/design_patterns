<?php
namespace App\CreationalPatterns\AbstractFactory\AmadeusSelfApi\Services;

use App\CreationalPatterns\AbstractFactory\Service;

final class SeatMapService implements Service
{
    public function request()
    {
        return "Amadeus Self Api SeatMap Request ";
    }

    public function response()
    {
        return "Amadeus Self Api SeatMap Response ";
    }

}