<?php
namespace App\CreationalPatterns\FactoryMethod\ProviderFactory;

use App\CreationalPatterns\FactoryMethod\Providers\Provider;
use App\CreationalPatterns\FactoryMethod\Providers\TravelPortProvider;
use JetBrains\PhpStorm\Pure;

class TravelPortFactory extends ProviderFactory
{
    protected function createProvider(): Provider
    {
        return new TravelPortProvider();
    }
}