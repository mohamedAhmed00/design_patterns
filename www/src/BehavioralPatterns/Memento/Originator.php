<?php

namespace App\BehavioralPatterns\Memento;

class Originator
{
    private Editor $editor;
    public function __construct()
    {
        $this->editor = new Editor();
    }

    public function addLine(string $line)
    {
        $this->editor->addLine($line);
    }

    public function save()
    {
        return new ConcreteMemento(clone $this->editor);
    }

    public function undo(MementoInterface $memento)
    {
        $this->editor = $memento->getSnapShot();
    }

    public function getEditor()
    {
        return $this->editor;
    }
}