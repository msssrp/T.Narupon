<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Books::index');
$routes->post('books/add', 'Books::addBook');
$routes->get('books/list', 'Books::listBooks');
$routes->get('books/viewBook/(:segment)', 'Books::viewBook/$1');
