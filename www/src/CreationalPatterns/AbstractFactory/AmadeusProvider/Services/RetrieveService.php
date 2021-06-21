<?php
namespace App\CreationalPatterns\AbstractFactory\AmadeusProvider\Services;

use App\CreationalPatterns\AbstractFactory\Service;

final class RetrieveService implements Service
{
    public function request()
    {
        return "Amadeus Retrieve Request ";
    }

    public function response()
    {
        return "Amadeus SeatMap Response ";
    }

}