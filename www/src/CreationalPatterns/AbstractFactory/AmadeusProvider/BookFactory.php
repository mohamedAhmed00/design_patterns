<?php
namespace App\CreationalPatterns\AbstractFactory\AmadeusProvider;

use App\CreationalPatterns\AbstractFactory\AbstractBook;
use App\CreationalPatterns\AbstractFactory\AmadeusProvider\Services\BookService;
use App\CreationalPatterns\AbstractFactory\Service;

final class BookFactory extends AbstractBook
{
    public function getBookObject() : Service
    {
        return new BookService();
    }
}