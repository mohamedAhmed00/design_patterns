<?php

use App\CreationalPatterns\SimpleFactory\FactoryProvider;
use App\CreationalPatterns\SimpleFactory\Provider;
use PHPUnit\Framework\TestCase;

class SimpleFactoryTest extends TestCase
{
    public function testAmadeusFactoryMethod(){
        $provider = new FactoryProvider();
        $this->assertInstanceOf(Provider::class,$provider->createProvider(['name','sas']));
    }
}
