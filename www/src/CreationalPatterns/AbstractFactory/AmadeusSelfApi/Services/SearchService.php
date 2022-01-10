<?php
namespace App\CreationalPatterns\AbstractFactory\AmadeusSelfApi\Services;

use App\CreationalPatterns\AbstractFactory\Service;

final class SearchService implements Service
{
    public function request()
    {
        return "Amadeus Self Api Search Request ";
    }

    public function response()
    {
        return "Amadeus Self Api Search Response ";
    }

}