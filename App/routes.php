<?php
    namespace App;

    use MF\Init\Bootstrap;

    class Routes extends Bootstrap{

        protected function initRoutes(){

            $routes['home'] = array(
                'route' => '/',
                'controller' => 'indexController',
                'action' => 'index'
            );

            $routes['contato'] = array(
                'route' => '/contato',
                'controller' => 'contatoController',
                'action' => 'contato'
            );

            $this->setRoutes($routes);
        }
    };
?>