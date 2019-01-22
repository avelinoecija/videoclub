<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movies;

class CatalogController extends Controller {

    public function getIndex (){
		return view('catalog.index', array('arrayPeliculas'=> Movies::all()));
	}

	public function getShow ($id){
		return view('catalog.show', array('arrayPeliculas'=>Movies::findOrFail($id)))->with('id_Pelicula', $id);
	}

	public function getCreate (){
		return view('catalog.create');
	}

	public function getEdit ($id){
		return view('catalog.edit', array('arrayPeliculas'=>Movies::findOrFail($id)))->with('id_Pelicula', $id);
	}
}
