<?php

use Phalcon\Mvc\Controller;

class ControllerBase extends Controller
{
    public function beforeExecuteRoute($dispatcher)
    {
        $this->assets->addCss('scss/index.scss');
        $this->assets->addCss('fontawesome-free/css/all.css');
        $this->assets->addCss('particles/css/style.css');

        $this->assets->addJs('particles/js/particles.min.js');
        $this->assets->addJs('particles/js/app.js');
    }
}
