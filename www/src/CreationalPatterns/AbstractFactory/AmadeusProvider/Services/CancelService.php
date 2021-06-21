<?php
namespace App\CreationalPatterns\AbstractFactory\AmadeusProvider\Services;

use App\CreationalPatterns\AbstractFactory\Service;

final class CancelService implements Service
{
    public function request()
    {
        return "Amadeus Cancel Request ";
    }

    public function response()
    {
        return "Amadeus Cancel Response ";
    }

}