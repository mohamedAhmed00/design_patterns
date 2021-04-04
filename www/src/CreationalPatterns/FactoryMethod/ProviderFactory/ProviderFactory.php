<?php
namespace App\CreationalPatterns\FactoryMethod\ProviderFactory;

use App\CreationalPatterns\FactoryMethod\Providers\Provider;

interface ProviderFactory
{
    public function createProvider(): Provider;
}