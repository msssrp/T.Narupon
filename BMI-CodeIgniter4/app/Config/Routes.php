<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('bmi', 'Home::showbmi');
$routes->post('calbmi', 'BmiController::calculateBmi');
$routes->get('inputbmi', 'BmiController::showInputForm');