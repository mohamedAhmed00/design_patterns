<?php
namespace App\CreationalPatterns\AbstractFactory\AmadeusProvider;

use App\CreationalPatterns\AbstractFactory\AbstractRetrieve;
use App\CreationalPatterns\AbstractFactory\AmadeusProvider\Services\RetrieveService;
use App\CreationalPatterns\AbstractFactory\Service;

final class RetrieveFactory extends AbstractRetrieve
{
    public function getRetrieveObject() : Service
    {
        return new RetrieveService();
    }
}