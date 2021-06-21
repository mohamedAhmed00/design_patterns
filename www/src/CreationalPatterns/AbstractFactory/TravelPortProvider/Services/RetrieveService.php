<?php
namespace App\CreationalPatterns\AbstractFactory\TravelPortProvider\Services;

use App\CreationalPatterns\AbstractFactory\Service;

final class RetrieveService implements Service
{
    public function request()
    {
        return "TravelPort Retrieve Request ";
    }

    public function response()
    {
        return "TravelPort SeatMap Response ";
    }

}