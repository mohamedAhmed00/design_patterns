<?php

use App\BehavioralPatterns\Command\Invoker;
use App\BehavioralPatterns\Command\OrderCommand;
use App\BehavioralPatterns\Command\OrderReceiver;
use \PHPUnit\Framework\TestCase;

class CommandTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testCanInvokerRunCommand()
    {
        $receiver = new OrderReceiver();
        $command = new OrderCommand($receiver);
        $invoker = new Invoker($command);
        $invoker->run();

        $this->assertCount(4,$receiver->getLogs());
    }
}
