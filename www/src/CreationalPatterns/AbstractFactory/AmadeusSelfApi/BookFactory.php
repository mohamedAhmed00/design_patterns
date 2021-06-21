<?php
namespace App\CreationalPatterns\AbstractFactory\AmadeusSelfApi;

use App\CreationalPatterns\AbstractFactory\AbstractBook;
use App\CreationalPatterns\AbstractFactory\AmadeusSelfApi\Services\BookService;
use App\CreationalPatterns\AbstractFactory\Service;

final class BookFactory extends AbstractBook
{
    public function getBookObject() : Service
    {
        return new BookService();
    }
}