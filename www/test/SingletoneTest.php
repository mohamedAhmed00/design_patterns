<?php

use App\CreationalPatterns\Singletone\Singletone;
use App\CreationalPatterns\Singletone\Test;
use PHPUnit\Framework\TestCase;

class SingletoneTest extends TestCase
{
    public function testWithSingleTone(){
        $test1 = Singletone::getInstance();
        $test2 = Singletone::getInstance();
        $this->assertSame($test1,$test2);
    }

    public function testWithoutSingleTone(){
        $test1 = new Test("nader",50);
        $test2 = new Test("nader",50);
        $this->assertNotSame($test1,$test2);
    }
}
