<?php
namespace App\CreationalPatterns\FactoryMethod\Providers;

class MickeySupplier implements Provider
{
    public function createProvider(): string
    {
        return 'mickey';
    }
}