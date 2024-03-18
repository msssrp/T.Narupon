<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Upload::index');
$routes->post('upload/uploadFile', 'Upload::uploadFile');
$routes->get('upload', 'Upload::index');
$routes->get('upload/list', 'Upload::listFiles');