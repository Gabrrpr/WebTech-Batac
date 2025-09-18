<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Index');
$routes->get(from:'GabrielBatac', to:'Index');
$routes->get(from:'index/greet', to:'Index::greet');
$routes->get(from:'index/greet/(:any)', to:'Index::greet/$1');
$routes->get('index/add/(:num)/(:num)','Index::add/$1/$2');
$routes->get('index/feature','Index::feature');