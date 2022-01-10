<?php
namespace App\StructuralPatterns\Pridge\PageExample;

class WebPage extends Page
{
    public function render(){
        echo $this->render->renderTitle();
        echo $this->render->renderHeader();
        echo $this->render->renderBody();
        echo $this->render->renderFooter();
    }
}