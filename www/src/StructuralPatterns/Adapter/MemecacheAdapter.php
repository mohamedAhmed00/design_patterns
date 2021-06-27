<?php
namespace App\StructuralPatterns\Adapter;

use App\StructuralPatterns\Adapter\Packages\IMemeCacheInterface;
use App\StructuralPatterns\Adapter\Packages\IRedisInterface;

class MemecacheAdapter implements CacheManager
{

    /**
     * IMemeCacheInterface constructor.
     * @param IMemeCacheInterface $redis
     */
    public function __construct(private IMemeCacheInterface $memeCache)
    {
    }

    public function connect()
    {
        $this->memeCache->getDriver();
    }

    public function read()
    {
        $this->memeCache->read();
    }

    public function write()
    {
        $this->memeCache->write();
    }

}