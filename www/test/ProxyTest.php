<?php

use \PHPUnit\Framework\TestCase;
use \App\StructuralPatterns\Proxy\User;
use \App\StructuralPatterns\Proxy\ProxyCourse;

class ProxyTest extends TestCase
{

    public function setUp(): void
    {
        parent::setUp();
    }

    public function testCanUserGetCourse()
    {
        $user = new User();
        $course = new ProxyCourse($user);
        $this->assertEquals("this is the course",$course->getCourse());
    }
}
