<?php
namespace App\CreationalPatterns\StaticFactory;

class FactoryProvider{

    private static array $providers = ['App\CreationalPatterns\StaticFactory\Amadeus','App\CreationalPatterns\StaticFactory\TravelPort'];

    public static function getInstant($type,...$params){
        if (in_array($type,self::$providers)){
            return new $type($params);
        }
        else {
            return null;
        }
    }
}