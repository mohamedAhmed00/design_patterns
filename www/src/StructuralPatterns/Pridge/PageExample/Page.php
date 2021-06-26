<?php
namespace App\StructuralPatterns\Pridge\PageExample;

abstract class Page
{
    protected $render;

    /**
     * Page constructor.
     * @param $render
     */
    public function __construct($render)
    {
        $this->render = $render;
    }

    /**
     * @param mixed $render
     */
    public function setRender($render): void
    {
        $this->render = $render;
    }

    abstract public function render();

}