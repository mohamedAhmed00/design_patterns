<?php
namespace App\StructuralPatterns\Proxy;

class ProxyCourse implements ICourseSubscription
{
    public function __construct(private User $user)
    {
    }

    public function getCourse()
    {
        if($this->user->getSubscription()) {
            $course = new Course();
            return $course->getCourse();
        }
    }

    public function getLesson()
    {
        if($this->user->getSubscription()) {
            $course = new Course();
            return $course->getLesson();
        }
    }

}