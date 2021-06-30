<?php
namespace App\StructuralPatterns\Proxy;

class Course implements ICourseSubscription
{
    public function getCourse()
    {
        return "this is the course";
    }

    public function getLesson()
    {
        return "this is the course lessons";
    }

}