<?php
namespace App\CreationalPatterns\AbstractFactory\AmadeusSelfApi;

use App\CreationalPatterns\AbstractFactory\AbstractCancel;
use App\CreationalPatterns\AbstractFactory\AmadeusSelfApi\Services\CancelService;
use App\CreationalPatterns\AbstractFactory\Service;

final class CancelFactory extends AbstractCancel
{
    public function getCancelObject() : Service
    {
        return new  CancelService();
    }
}