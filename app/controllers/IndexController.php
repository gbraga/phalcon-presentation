<?php

class IndexController extends ControllerBase
{

    public function indexAction()
    {
        echo "teste";
        $this->assets->addCss('scss/index.scss');

        // $this->view->setMainView("index");

        $this->view->pick('Index/index');
    }
}

