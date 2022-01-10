<?php
namespace App\CreationalPatterns\AbstractFactory\AmadeusSelfApi;

use App\CreationalPatterns\AbstractFactory\AbstractSearch;
use App\CreationalPatterns\AbstractFactory\AmadeusSelfApi\Services\SearchService;
use App\CreationalPatterns\AbstractFactory\Service;

final class SearchFactory extends AbstractSearch
{
    public function getSearchObject() : Service
    {
        return new SearchService();
    }
}