<?php
namespace App\CreationalPatterns\AbstractFactory\TravelPortProvider;

use App\CreationalPatterns\AbstractFactory\AbstractBook;
use App\CreationalPatterns\AbstractFactory\Service;
use App\CreationalPatterns\AbstractFactory\TravelPortProvider\Services\BookService;

final class BookFactory extends AbstractBook
{
    public function getBookObject() : Service
    {
        return new BookService();
    }
}