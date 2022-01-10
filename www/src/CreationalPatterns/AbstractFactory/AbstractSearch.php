<?php
namespace App\CreationalPatterns\AbstractFactory;

abstract class AbstractSearch
{
    abstract public function getSearchObject() : Service;
}