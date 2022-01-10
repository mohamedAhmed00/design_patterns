<?php
namespace App\CreationalPatterns\FactoryMethod\Providers;

class DOTSupplier implements Provider
{
    public function createProvider(): string
    {
        return 'Distinction Of the World';
    }
}