<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');
$routes->get('about', 'Home::about');
$routes->get('enrollment', 'Home::enrollment');
$routes->get('customers', 'Home::customers');
$routes->get('users', 'Home::users');
$routes->get('profile', 'Home::profile');