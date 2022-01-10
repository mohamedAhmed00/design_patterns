<?php

use App\BehavioralPatterns\Mediator\Bot;
use App\BehavioralPatterns\Mediator\Chat;
use App\BehavioralPatterns\Mediator\User;
use \PHPUnit\Framework\TestCase;

class MediatorTest extends TestCase
{
    public function testCanMediatorSendMessage()
    {
        $chat = new Chat();
        $john = new User($chat);
        $message = $chat->notify($john,'sendMessage','');
        $this->assertEquals($message, 'message is send');
    }

    public function testCanMediatorBlockUser()
    {
        $chat = new Chat();
        $john = new User($chat);
        $jane = new Bot($chat);
        $message = $chat->notify($jane,'block', $john);
        $this->assertEquals($message, 'this user is blocked');
    }
}
