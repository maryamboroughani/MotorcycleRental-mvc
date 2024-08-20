<?php
use App\Routes\Route;
use App\Controllers\HomeController;
use App\Controllers\RentalController;

$router = new \App\Routes\Route();

// Define routes
// In routes/web.php
$router->get('/rental', 'RentalController@index');
$router->get('/rental/create', 'RentalController@create');
$router->post('/rental/store', 'RentalController@store');
$router->get('/rental/show', 'RentalController@show');
$router->get('/rental/edit', 'RentalController@edit');
$router->post('/rental/update', 'RentalController@update');
$router->post('/rental/delete', 'RentalController@delete');

// Dispatch the request
$router->dispatch();

