<?php

namespace Controller;

use Mf\controller\Action;

class IndexController extends Action{

    public function index(){
        $this->view->dados = NULL;
        $this->render('index', $dados);
    }

    public function contato(){
        $this->$view->$dados = NULL;
        $this->render('contato', $dados);
    }
};

?>