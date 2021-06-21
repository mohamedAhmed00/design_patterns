<?php
namespace App\CreationalPatterns\AbstractFactory\AmadeusSelfApi\Services;

use App\CreationalPatterns\AbstractFactory\Service;

final class BookService implements Service
{
    public function request()
    {
        return "Amadeus Self Api Book Request ";
    }

    public function response()
    {
        return "Amadeus Self Api Book Response ";
    }

}