<?php
namespace App\CreationalPatterns\FactoryMethod\Providers;

class AmadeusProvider implements Provider
{
    public function createProvider(): string
    {
        return 'amadeus';
    }
}