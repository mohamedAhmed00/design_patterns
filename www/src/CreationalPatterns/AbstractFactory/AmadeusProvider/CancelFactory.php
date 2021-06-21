<?php
namespace App\CreationalPatterns\AbstractFactory\AmadeusProvider;

use App\CreationalPatterns\AbstractFactory\AbstractCancel;
use App\CreationalPatterns\AbstractFactory\AmadeusProvider\Services\CancelService;
use App\CreationalPatterns\AbstractFactory\Service;

final class CancelFactory extends AbstractCancel
{
    public function getCancelObject() : Service
    {
        return new  CancelService();
    }
}