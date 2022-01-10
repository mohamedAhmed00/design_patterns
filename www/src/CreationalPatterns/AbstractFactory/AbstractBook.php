<?php
namespace App\CreationalPatterns\AbstractFactory;

abstract class AbstractBook
{
    abstract public function getBookObject() : Service;
}