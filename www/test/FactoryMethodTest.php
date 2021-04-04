<?php

use App\CreationalPatterns\FactoryMethod\ProviderFactory\AmadeusFactory;
use App\CreationalPatterns\FactoryMethod\ProviderFactory\AmadeusSelfApiFactory;
use App\CreationalPatterns\FactoryMethod\ProviderFactory\DOTFactory;
use App\CreationalPatterns\FactoryMethod\ProviderFactory\MickeyFactory;
use App\CreationalPatterns\FactoryMethod\ProviderFactory\TravelPortFactory;
use App\CreationalPatterns\FactoryMethod\Providers\AmadeusProvider;
use App\CreationalPatterns\FactoryMethod\Providers\AmadeusSelfApiProvider;
use App\CreationalPatterns\FactoryMethod\Providers\DOTSupplier;
use App\CreationalPatterns\FactoryMethod\Providers\MickeySupplier;
use App\CreationalPatterns\FactoryMethod\Providers\Provider;
use App\CreationalPatterns\FactoryMethod\Providers\TravelPortProvider;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    public function testAmadeusFactoryMethod(){
        $amadeus = new AmadeusFactory();
        $this->assertEquals(new AmadeusProvider(),$amadeus->createProvider());
        $this->assertInstanceOf(Provider::class,$amadeus->createProvider());
    }

    public function testAmadeusSelfApiFactoryMethod(){
        $amadeus_self_api = new AmadeusSelfApiFactory();
        $this->assertEquals(new AmadeusSelfApiProvider(),$amadeus_self_api->createProvider());
        $this->assertInstanceOf(Provider::class,$amadeus_self_api->createProvider());
    }

    public function testTravelPortFactoryMethod(){
        $travel_port = new TravelPortFactory();
        $this->assertEquals(new TravelPortProvider(),$travel_port->createProvider());
        $this->assertInstanceOf(Provider::class,$travel_port->createProvider());
    }

    public function testDOTFactoryMethod(){
        $dot = new DOTFactory();
        $this->assertEquals(new DOTSupplier(),$dot->createProvider());
        $this->assertInstanceOf(Provider::class,$dot->createProvider());
    }

    public function testMickeyFactoryMethod(){
        $mickey = new MickeyFactory();
        $this->assertEquals(new MickeySupplier(),$mickey->createProvider());
        $this->assertInstanceOf(Provider::class,$mickey->createProvider());
    }

}
