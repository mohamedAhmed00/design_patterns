<?php
namespace App\CreationalPatterns\AbstractFactory\AmadeusProvider\Services;

use App\CreationalPatterns\AbstractFactory\Service;

final class SearchService implements Service
{
    public function request()
    {
        return "Amadeus Search Request ";
    }

    public function response()
    {
        return "Amadeus Search Response ";
    }

}