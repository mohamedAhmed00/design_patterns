<?php

namespace App\BehavioralPatterns\Memento;

class Editor
{
    private array $lines = [];

    public function addLine(string $line)
    {
        $this->lines[] = $line;
    }

    public function getLines(): array
    {
        return $this->lines;
    }
}