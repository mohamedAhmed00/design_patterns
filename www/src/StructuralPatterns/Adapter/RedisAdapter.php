<?php
namespace App\StructuralPatterns\Adapter;

use App\StructuralPatterns\Adapter\Packages\IRedisInterface;

class RedisAdapter implements CacheManager
{

    /**
     * RedisAdapter constructor.
     * @param IRedisInterface $redis
     */
    public function __construct(private IRedisInterface $redis)
    {
    }

    public function connect()
    {
        $this->redis->redisConnect();
        $this->redis->redisStart();
    }

    public function read()
    {
        $this->redis->redisRead();
    }

    public function write()
    {
        $this->redis->redisWrite();
    }

}