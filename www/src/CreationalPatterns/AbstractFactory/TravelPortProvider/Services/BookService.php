<?php
namespace App\CreationalPatterns\AbstractFactory\TravelPortProvider\Services;

use App\CreationalPatterns\AbstractFactory\Service;

final class BookService implements Service
{
    public function request()
    {
        return "TravelPort Book Request ";
    }

    public function response()
    {
        return "TravelPort Book Response ";
    }

}