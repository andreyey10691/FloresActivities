<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection 
 */

$routes->get('/', 'Home::index');
$routes->get('/home', 'Home::index');
$routes->get('/about', 'Home::about');
$routes->get('/customers', 'Home::enrollment');
$routes->get('/users', 'Home::profile');