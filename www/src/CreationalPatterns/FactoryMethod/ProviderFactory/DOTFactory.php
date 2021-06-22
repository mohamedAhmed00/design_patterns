<?php
namespace App\CreationalPatterns\FactoryMethod\ProviderFactory;

use App\CreationalPatterns\FactoryMethod\Providers\DOTSupplier;
use App\CreationalPatterns\FactoryMethod\Providers\Provider;
use JetBrains\PhpStorm\Pure;

class DOTFactory extends ProviderFactory
{
    protected function createProvider(): Provider
    {
        return new DOTSupplier();
    }
}