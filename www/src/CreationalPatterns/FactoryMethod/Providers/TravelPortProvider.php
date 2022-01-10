<?php
namespace App\CreationalPatterns\FactoryMethod\Providers;

class TravelPortProvider implements Provider
{
    public function createProvider(): string
    {
        return 'travelPort';
    }
}