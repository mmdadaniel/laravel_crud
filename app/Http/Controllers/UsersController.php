<?php

namespace App\Http\Controllers;
use App\Usuarios;
use Redirect;
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

    public function add(Request $request) {
        $usuario = new Usuarios;
        $usuario = $usuario->create($request->all());
        return Redirect::to('/users');
    }

    public function edit($id) {
        $usuario = Usuarios::findOrFail($id);
        return view('users.form', ['usuario' => $usuario]);  
    }

    public function update($id, Request $request) {
        $usuario = Usuarios::findOrFail($id);
        $usuario->update($request->all());
        return Redirect::to('/users');
    }

    public function delete($id) {
        $usuario = Usuarios::findOrFail($id);
        $usuario->delete();
        return Redirect::to('/users');
    }
}
