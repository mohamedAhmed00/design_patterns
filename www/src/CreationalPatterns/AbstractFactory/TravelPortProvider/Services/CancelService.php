<?php
namespace App\CreationalPatterns\AbstractFactory\TravelPortProvider\Services;

use App\CreationalPatterns\AbstractFactory\Service;

final class CancelService implements Service
{
    public function request()
    {
        return "TravelPort Cancel Request ";
    }

    public function response()
    {
        return "TravelPort Cancel Response ";
    }

}