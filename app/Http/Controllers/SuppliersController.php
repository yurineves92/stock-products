<?php

namespace App\Http\Controllers;

use App\Suppliers;
use Request;
use Session;

class SuppliersController extends Controller
{
    public function index(Request $request){
    	if($request) {
    		$query = trim(Request::get('searchText'));
    		$suppliers = Suppliers::where('name','LIKE','%'.$query.'%')->orderBy('id','DESC')->paginate(25);
    	}
    	return view('suppliers.index')->with('suppliers',$suppliers)->with('searchText',$query);
    }

    public function create(){
    	return view('suppliers.create');
    }
    public function store(){
    	$params = Request::all();
    	$supplier = new Suppliers($params);
    	$supplier->save();
    	Session::flash('alert-success', 'Fornecedor criado com sucesso!');
    	return redirect()->action("SuppliersController@index");
    }

    public function edit($id){
    	return view("suppliers.edit", ["supplier"=>Suppliers::findOrFail($id)]);
    }

    public function update($id){
        $params = Request::all();
    	$supplier = Suppliers::findOrFail($id);
    	$supplier->update($params);
    	Session::flash('alert-success', 'Fornecedor atualizado com sucesso!');
    	return redirect()->action("SuppliersController@index");
    }

    public function destroy($id){
    	$supplier = Suppliers::findOrFail($id)->delete();
    	Session::flash('alert-success', 'Fornecedor removido com sucesso!');
    	return redirect()->action("SuppliersController@index");
    }
}

