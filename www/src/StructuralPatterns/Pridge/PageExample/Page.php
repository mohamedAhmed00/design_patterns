<?php
namespace App\StructuralPatterns\Pridge\PageExample;

abstract class Page
{

    /**
     * Page constructor.
     * @param $render
     */
    public function __construct(protected $render)
    {
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