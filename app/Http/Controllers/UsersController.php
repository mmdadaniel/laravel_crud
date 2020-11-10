<?php

namespace App\Http\Controllers;
use App\Usuarios;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index() {
    	$usuarios = Usuarios::get();

    	return view('users.list', ['usuarios' => $usuarios]);
    }

    public function new(){
    	return view('users.form');
    }
}
