<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use App\User;

class QueryController extends Controller
{
	public function eloquentAll()
	{
		$users=User::all();
		$titulo='Todos los Usuarios(ALL)';
		return view('query.all', compact('users', 'titulo'));
	}

	public function eloquentGet($gender)
	{
		$users=User::where('gender','=', $gender)->get();
		$titulo='Todos los Usuarios(GET)';
		return view('query.all', compact('users', 'titulo'));
	}
}
