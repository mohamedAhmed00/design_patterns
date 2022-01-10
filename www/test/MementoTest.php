<?php

use App\BehavioralPatterns\Memento\CareTaker;
use App\BehavioralPatterns\Memento\Originator;
use \PHPUnit\Framework\TestCase;

class MementoTest extends TestCase
{
    private Originator $originator;
    private CareTaker $careTaker;

    public function setUp(): void
    {
        parent::setUp();

        $this->originator = new Originator();
        $this->careTaker = new CareTaker($this->originator);
    }

    public function testCanSaveSnapshot()
    {
        $this->originator->addLine('<?php ');
        $this->originator->addLine('$x = 10;');
        $this->originator->addLine('$y = 5;');
        $this->originator->addLine('echo $x + $y');
        $this->careTaker->save();
        $editor = $this->originator->getEditor();
        $this->assertEquals(4, count($editor->getLines()));
    }

    public function testCanRollBackSnapshot()
    {
        $this->originator->addLine('<?php ');
        $this->originator->addLine('$x = 10;');
        $this->originator->addLine('$y = 5;');
        $this->originator->addLine('echo $x + $y');
        $this->careTaker->save();
        $this->originator->addLine('$x = 6;');
        $this->originator->addLine('$x = 6;');
        $this->originator->addLine('$x = 6;');
        $this->originator->addLine('echo $x + $y');
        $this->careTaker->rollBack();
        $editor = $this->originator->getEditor();
        $this->assertEquals(4, count($editor->getLines()));
    }
}
