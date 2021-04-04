<?php
namespace App\CreationalPatterns\FactoryMethod\Providers;

interface Provider
{
    public function createProvider(): string;
}