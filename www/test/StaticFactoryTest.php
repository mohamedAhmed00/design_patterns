<?php

use App\CreationalPatterns\StaticFactory\Provider;
use PHPUnit\Framework\TestCase;
use App\CreationalPatterns\StaticFactory\FactoryProvider;

class StaticFactoryTest extends TestCase
{
    public function testAmadeusStaticMethod(){
        $this->assertInstanceOf(Provider::class,FactoryProvider::getInstant('App\CreationalPatterns\StaticFactory\TravelPort',['name','sas']));
    }
}
