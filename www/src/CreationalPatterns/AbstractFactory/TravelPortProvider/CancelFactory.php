<?php
namespace App\CreationalPatterns\AbstractFactory\TravelPortProvider;

use App\CreationalPatterns\AbstractFactory\AbstractCancel;
use App\CreationalPatterns\AbstractFactory\Service;
use App\CreationalPatterns\AbstractFactory\TravelPortProvider\Services\CancelService;

final class CancelFactory extends AbstractCancel
{
    public function getCancelObject() : Service
    {
        return new  CancelService();
    }
}