<?php
namespace App\CreationalPatterns\SimpleFactory;

use JetBrains\PhpStorm\Pure;

class FactoryProvider
{
    #[Pure] public function createProvider(...$params): Amadeus
    {
        return new Amadeus($params);
    }
}