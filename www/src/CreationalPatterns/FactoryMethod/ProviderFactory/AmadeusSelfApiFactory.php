<?php
namespace App\CreationalPatterns\FactoryMethod\ProviderFactory;

use App\CreationalPatterns\FactoryMethod\Providers\AmadeusSelfApiProvider;
use App\CreationalPatterns\FactoryMethod\Providers\Provider;
use JetBrains\PhpStorm\Pure;

class AmadeusSelfApiFactory extends ProviderFactory
{
    protected function createProvider(): Provider
    {
        return new AmadeusSelfApiProvider();
    }
}