<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/2/3
 * Time: 14:17
 */
use Symfony\Component\Routing;

$routes = new Routing\RouteCollection();
$routes->add('hello', new Routing\Route('/hello/{name}', array('name' => 'World')));
$routes->add('bye', new Routing\Route('/bye'));

return $routes;