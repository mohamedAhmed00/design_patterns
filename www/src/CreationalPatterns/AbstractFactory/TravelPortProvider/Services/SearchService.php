<?php
namespace App\CreationalPatterns\AbstractFactory\TravelPortProvider\Services;

use App\CreationalPatterns\AbstractFactory\Service;

final class SearchService implements Service
{
    public function request()
    {
        return "TravelPort Search Request ";
    }

    public function response()
    {
        return "TravelPort Search Response ";
    }

}