<?php
namespace App\CreationalPatterns\FactoryMethod\ProviderFactory;

use App\CreationalPatterns\FactoryMethod\Providers\Provider;

abstract class ProviderFactory
{
    abstract protected function createProvider(): Provider;

    public function getInstance() : Provider{
        return $this->createProvider();
    }
}