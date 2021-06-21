<?php
namespace App\CreationalPatterns\AbstractFactory\AmadeusSelfApi\Services;

use App\CreationalPatterns\AbstractFactory\Service;

final class RetrieveService implements Service
{
    public function request()
    {
        return "Amadeus Self Api Retrieve Request ";
    }

    public function response()
    {
        return "Amadeus Self Api SeatMap Response ";
    }

}