<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoriesRequest;
use App\Categories;
use Session;
use Request;

class CategoriesController extends Controller
{
    public function index(Request $request) {
    	if($request) {
    		$query = trim(Request::get('searchText'));
    		$categories = Categories::where('name','LIKE','%'.$query.'%')->orderBy('id','DESC')->paginate(25);
    	}
    	return view('categories.index')->with('categories',$categories)->with('searchText',$query);
    }

    public function create(){
    	return view('categories.create');
    }
    public function store(CategoriesRequest $request){
    	$params = $request->all();
    	$category = new Categories($params);
    	$category->save();
    	Session::flash('alert-success', 'Categoria criada com sucesso!');
    	return redirect()->action("CategoriesController@index");
    }

    public function edit($id){
    	return view("categories.edit", ["category"=>Categories::findOrFail($id)]);
    }

    public function update(CategoriesRequest $request,$id){
        $params = $request->all();
    	$category = Categories::findOrFail($id);
    	$category->update($params);
    	Session::flash('alert-success', 'Categoria atualizada com sucesso!');
    	return redirect()->action("CategoriesController@index");
    }

    public function destroy($id){
    	$category = Categories::findOrFail($id)->delete();
    	Session::flash('alert-success', 'Categoria removido com sucesso!');
    	return redirect()->action("CategoriesController@index");
    }
}
