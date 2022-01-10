<?php
namespace App\CreationalPatterns\AbstractFactory;

interface ProviderAbstractFactory
{
    public function createSearch() : AbstractSearch;
    public function createSeatMap() : AbstractSeatMap;
    public function createBook() : AbstractBook;
    public function createRetrieve() : AbstractRetrieve;
    public function createCancel() : AbstractCancel;
}