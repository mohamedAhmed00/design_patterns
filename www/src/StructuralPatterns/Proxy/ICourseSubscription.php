<?php
namespace App\StructuralPatterns\Proxy;

interface ICourseSubscription
{
    public function getCourse();
    public function getLesson();
}