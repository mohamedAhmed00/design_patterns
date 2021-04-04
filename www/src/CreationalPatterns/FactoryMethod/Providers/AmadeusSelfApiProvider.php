<?php
namespace App\CreationalPatterns\FactoryMethod\Providers;

class AmadeusSelfApiProvider implements Provider
{
    public function createProvider(): string
    {
        return 'amadeus self api';
    }
}