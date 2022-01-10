<?php
namespace App\CreationalPatterns\AbstractFactory\AmadeusSelfApi;

use App\CreationalPatterns\AbstractFactory\AbstractRetrieve;
use App\CreationalPatterns\AbstractFactory\AmadeusSelfApi\Services\RetrieveService;
use App\CreationalPatterns\AbstractFactory\Service;

final class RetrieveFactory extends AbstractRetrieve
{
    public function getRetrieveObject() : Service
    {
        return new RetrieveService();
    }
}