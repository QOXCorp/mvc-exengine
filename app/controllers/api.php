<?php

class Api extends \ExEngine\MVC\Controller {
    var $imSilent = true;
    protected function __atconstruct() {

    }


    function index() {
        $this->r->goTo->home();
    }

    function register() {

    }
}