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

	public function postCreate (Request $request){
		$peliculaNueva = new Movies();
		$peliculaNueva->title = $request->get('title');
		$peliculaNueva->year = $request->get('year');
		$peliculaNueva->director = $request->get('director');
		$peliculaNueva->poster = $request->get('poster');
		$peliculaNueva->rented = false;
		$peliculaNueva->synopsis = $request->get('synopsis');
		$peliculaNueva->save();
		return redirect()->action('CatalogController@getIndex');
	}

	public function putEdit (Request $request, $id){
		$pelicula = Movies::findOrFail($id);
    	$pelicula->title = $request->input('title');
    	$pelicula->year = $request->input('year');
    	$pelicula->director = $request->input('director');
    	$pelicula->poster = $request->input('poster');
    	$pelicula->synopsis = $request->input('synopsis');
    	$pelicula->save();
    	return redirect('/catalog/show/'.$id);
    }

}
