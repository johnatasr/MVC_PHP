<?php
    require_once '../vendor/autoload.php';
    // require '../App/routes.php';
    
    // use App\Routes;

    $route_path = new App\Routes;

	print_r($route_path->getUrl());
	print_r($route_path->getRoutes());

?>