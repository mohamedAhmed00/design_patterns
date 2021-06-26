<?php
namespace App\StructuralPatterns\Adapter;

interface CacheManager
{
    public function connect();
    public function read();
    public function write();
}