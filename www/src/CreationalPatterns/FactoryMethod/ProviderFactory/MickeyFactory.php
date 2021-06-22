<?php
namespace App\CreationalPatterns\FactoryMethod\ProviderFactory;

use App\CreationalPatterns\FactoryMethod\Providers\MickeySupplier;
use App\CreationalPatterns\FactoryMethod\Providers\Provider;
use JetBrains\PhpStorm\Pure;

class MickeyFactory extends ProviderFactory
{
    protected function createProvider(): Provider
    {
        return new MickeySupplier();
    }
}