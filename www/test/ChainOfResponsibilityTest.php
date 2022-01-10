<?php

use App\BehavioralPatterns\ChainOfResponsibility\CsrfHandler;
use App\BehavioralPatterns\ChainOfResponsibility\HttpHandler;
use App\BehavioralPatterns\ChainOfResponsibility\IRequestHandler;
use App\BehavioralPatterns\ChainOfResponsibility\SubscriptionHandler;
use \PHPUnit\Framework\TestCase;

class ChainOfResponsibilityTest extends TestCase
{
    private IRequestHandler $httpHandler;
    private IRequestHandler $csrfHandler;
    private IRequestHandler $subscriptionHandler;

    public function setUp(): void
    {
        parent::setUp();
        $this->httpHandler = new HttpHandler('https');
        $this->csrfHandler = new CsrfHandler('123456');
        $this->subscriptionHandler = new SubscriptionHandler();
        $this->httpHandler->setNext($this->csrfHandler);
        $this->csrfHandler->setNext($this->subscriptionHandler);
    }

    public function testCanRequestBeValid()
    {
        $return = $this->httpHandler->handler();
        $this->assertEquals($return, 'done');
    }
}
