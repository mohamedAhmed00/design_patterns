<?php

use App\BehavioralPatterns\Observer\Observers\Attacker;
use App\BehavioralPatterns\Observer\Observers\Defender;
use App\BehavioralPatterns\Observer\Observers\Goalkeeper;
use App\BehavioralPatterns\Observer\Subject\Goal;
use \PHPUnit\Framework\TestCase;

class ObserverTest extends TestCase
{

    private Goal $goal;

    public function setUp(): void
    {
        parent::setUp();

        $gk = new Goalkeeper(9,"esa",30);
        $this->goal = new Goal();
        $this->goal->register(new Attacker(1,"nader",21));
        $this->goal->register(new Defender(4,"osama",24));
        $this->goal->register(new Goalkeeper(7,"esa",30));
        $this->goal->register($gk);
        $this->goal->remove($gk);
    }

    public function testCanSubjectNotifyPlayer()
    {
        $return = $this->goal->notify();
        $this->assertEquals($return,["wow , good goal from Attacker","wow , good goal from Defender","wow , good goal from Goalkeeper"]);

    }
}
