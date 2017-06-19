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
use Faker\Factory as Faker; //para crear datos dinamicos

Route::get('/', function () {
   // return view('welcome');

   $faker = Faker::create();

	User::create([
      'name'=>$faker->name,
      'email'=>$faker->email,
      'password'=>bcrypt('123456'), 
      'gender'=>$faker->randomElement(['f','m']), 
      'biografia'=>$faker->text(255),
		]);

	return 'Usuraio ingresado correctamente';
});
