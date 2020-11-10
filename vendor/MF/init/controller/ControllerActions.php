<?php

namespace MF\controller;

abstract class Action{

    protected $view;

    public function __construct(){
        $this->view = new \stdClass();
    }

    protected function render($view, $dados){
        $classAtual = get_class($this);
        $classAtual = str_replace('App\\views\\', '' , $classAtual);
        $classAtual = strtolower(str_replace('Controller', '', $classAtual));

        require_once '../App/views/Index/'.$view.'.phtml';
    }

}
?>