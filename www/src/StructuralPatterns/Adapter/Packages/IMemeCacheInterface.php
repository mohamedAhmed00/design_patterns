<?php
namespace App\StructuralPatterns\Adapter\Packages;

interface IMemeCacheInterface
{
    public function getDriver();

    public function read();

    public function write();
}