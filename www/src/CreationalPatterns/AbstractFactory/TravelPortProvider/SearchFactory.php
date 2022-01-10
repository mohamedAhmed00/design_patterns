<?php
namespace App\CreationalPatterns\AbstractFactory\TravelPortProvider;

use App\CreationalPatterns\AbstractFactory\AbstractSearch;
use App\CreationalPatterns\AbstractFactory\Service;
use App\CreationalPatterns\AbstractFactory\TravelPortProvider\Services\SearchService;

final class SearchFactory extends AbstractSearch
{
    public function getSearchObject() : Service
    {
        return new SearchService();
    }
}