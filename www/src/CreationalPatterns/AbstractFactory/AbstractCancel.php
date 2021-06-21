<?php
namespace App\CreationalPatterns\AbstractFactory;

abstract class AbstractCancel
{
    abstract public function getCancelObject() : Service;
}