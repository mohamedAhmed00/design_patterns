<?php
namespace App\CreationalPatterns\AbstractFactory;

abstract class AbstractRetrieve
{
    abstract public function getRetrieveObject() : Service;
}