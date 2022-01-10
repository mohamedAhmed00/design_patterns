<?php
namespace App\CreationalPatterns\AbstractFactory\TravelPortProvider;

use App\CreationalPatterns\AbstractFactory\AbstractRetrieve;
use App\CreationalPatterns\AbstractFactory\Service;
use App\CreationalPatterns\AbstractFactory\TravelPortProvider\Services\RetrieveService;

final class RetrieveFactory extends AbstractRetrieve
{
    public function getRetrieveObject() : Service
    {
        return new RetrieveService();
    }
}