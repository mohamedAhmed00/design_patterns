<?php
namespace App\StructuralPatterns\Adapter\Packages;

interface IRedisInterface
{
    public function redisConnect();

    public function redisStart();

    public function redisRead();

    public function redisWrite();
}