<?php

use Symfony\Component\Routing;

$routes = new Routing\RouteCollection();
$routes->add('hello', new Routing\Route('/hello/{name}', array(
	'name' => 'World',
	'_controller' => array(new App\Controller\AppController(), 'indexAction'),
)));

return $routes;