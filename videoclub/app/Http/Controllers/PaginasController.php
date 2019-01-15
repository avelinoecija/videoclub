<?php
namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class PaginasController extends Controller
{
	public function nosotros (){
		$nombre='Avelino';
		return view('nosotros')->with('nombreenviado',$nombre);
	}
	public function contacto (){
		//return "Nosotros desde el controlador";
		return view('contacto')->with ([
			'nombre'=>'Avelino',
			'apellido'=>'Ecija'
		]);
	}
	public function conexion (){
		return view('autenticacion.conexion');
	}
	public function logout (){
		return view('autenticacion.logout');
	}
	public function index (){
		return view('catalog.index');
	}
	public function show (){
		return view('catalog.show', array('id'=>$id=1));
	}
	public function create (){
		return view('catalog.create');
	}
	public function edit (){
		return view('catalog.edit', array('id'=>$id=1));
	}
	public function home (){
		return view('home');
	}
}