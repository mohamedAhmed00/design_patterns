<?php
namespace App\StructuralPatterns\Adapter\Packages;

class Redis implements IRedisInterface
{
    public function redisConnect()
    {
        var_dump("redis connect");
    }

    public function redisStart()
    {
        var_dump("redis start");
    }

    public function redisRead()
    {
        var_dump("redis read");
    }

    public function redisWrite()
    {
        var_dump("redis write");
    }
}