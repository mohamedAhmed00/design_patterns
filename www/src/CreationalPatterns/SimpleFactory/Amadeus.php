<?php
namespace App\CreationalPatterns\SimpleFactory;

class Amadeus implements Provider
{
    public function __construct(public array $param)
    {

    }
}