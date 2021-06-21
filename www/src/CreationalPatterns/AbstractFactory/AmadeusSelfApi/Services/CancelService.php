<?php
namespace App\CreationalPatterns\AbstractFactory\AmadeusSelfApi\Services;

use App\CreationalPatterns\AbstractFactory\Service;

final class CancelService implements Service
{
    public function request()
    {
        return "Amadeus Self Api Cancel Request ";
    }

    public function response()
    {
        return "Amadeus Self Api Cancel Response ";
    }

}