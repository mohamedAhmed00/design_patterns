<?php
namespace App\CreationalPatterns\AbstractFactory\AmadeusSelfApi;

use App\CreationalPatterns\AbstractFactory\AbstractBook;
use App\CreationalPatterns\AbstractFactory\AbstractCancel;
use App\CreationalPatterns\AbstractFactory\AbstractRetrieve;
use App\CreationalPatterns\AbstractFactory\AbstractSearch;
use App\CreationalPatterns\AbstractFactory\AbstractSeatMap;
use App\CreationalPatterns\AbstractFactory\ProviderAbstractFactory;

class AmadeusSelfApiFactory implements ProviderAbstractFactory
{
    public function createSearch(): AbstractSearch
    {
        return new SearchFactory();
    }

    public function createSeatMap(): AbstractSeatMap
    {
        return new SeatMapFactory();
    }

    public function createBook(): AbstractBook
    {
        return new BookFactory();
    }

    public function createRetrieve(): AbstractRetrieve
    {
        return new RetrieveFactory();
    }

    public function createCancel(): AbstractCancel
    {
        return new CancelFactory();
    }

}