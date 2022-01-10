<?php
namespace App\CreationalPatterns\FactoryMethod\ProviderFactory;

use App\CreationalPatterns\FactoryMethod\Providers\AmadeusProvider;
use App\CreationalPatterns\FactoryMethod\Providers\Provider;
use JetBrains\PhpStorm\Pure;

class AmadeusFactory extends ProviderFactory
{
    protected function createProvider(): Provider
    {
        return new AmadeusProvider();
    }
}