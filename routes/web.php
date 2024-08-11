<?php
use App\Routes\Route;
use App\Controllers\HomeController;
use App\Controllers\RentalController;

// Define routes
Route::get('/', 'HomeController@index'); 
Route::get('/home', 'HomeController@index');

// Rental routes with parameters
Route::get('/rental', 'RentalController@index'); // List all rentals
Route::get('/rental/create', 'RentalController@create'); // Show form to create a rental
Route::post('/rental/store', 'RentalController@store'); // Store a new rental
Route::get('/rental/show/{id}', 'RentalController@show'); // Show a specific rental
Route::get('/rental/edit/{id}', 'RentalController@edit'); // Show form to edit a specific rental
Route::post('/rental/update/{id}', 'RentalController@update'); // Update a specific rental
Route::post('/rental/delete/{id}', 'RentalController@delete'); // Delete a specific rental

// Dispatch routes
Route::dispatch();
