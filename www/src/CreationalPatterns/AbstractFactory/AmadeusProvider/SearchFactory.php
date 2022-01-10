<?php
namespace App\CreationalPatterns\AbstractFactory\AmadeusProvider;

use App\CreationalPatterns\AbstractFactory\AbstractSearch;
use App\CreationalPatterns\AbstractFactory\AmadeusProvider\Services\SearchService;
use App\CreationalPatterns\AbstractFactory\Service;

final class SearchFactory extends AbstractSearch
{
    public function getSearchObject() : Service
    {
        return new SearchService();
    }
}