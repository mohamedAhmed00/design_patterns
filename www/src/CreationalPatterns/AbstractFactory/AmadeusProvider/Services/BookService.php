<?php
namespace App\CreationalPatterns\AbstractFactory\AmadeusProvider\Services;

use App\CreationalPatterns\AbstractFactory\Service;

final class BookService implements Service
{
    public function request()
    {
        return "Amadeus Book Request ";
    }

    public function response()
    {
        return "Amadeus Book Response ";
    }

}