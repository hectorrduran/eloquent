<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\User;

Route::get('/', function () {
   // return view('welcome');

	User::create([
      'name'=>'Hector',
      'email'=>'hectorrduran@gmail.com',
      'password'=>bcrypt('123456'), 
      'gender'=>'m', 
      'biografia'=>'profesor de programacion'
		]);

	return 'Usuraio ingresado correctamente';
});
