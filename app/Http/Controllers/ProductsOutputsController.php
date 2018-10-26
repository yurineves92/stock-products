<?php

namespace App\Http\Controllers;

use App\ProductsOutputs;
use App\Clients;
use App\Products;
use Request;
use Session;

class ProductsOutputsController extends Controller
{
    public function index(){
    	$products_outputs = ProductsOutputs::paginate(25);
    	return view('products_outputs.index')->with('products_outputs',$products_outputs);
    }

    public function create(){
    	$products = Products::all();
    	$clients = Clients::all();
    	return view('products_outputs.create')->with('clients',$clients)->with('products',$products);
    }

    public function store(){
    	$params = Request::all();
    	$products_outputs = new ProductsOutputs($params);
    	$products_outputs->save();
    	Session::flash('alert-success', 'Saída de produto criado com sucesso!');
        return redirect()->action("ProductsOutputsController@index");
    }

    public function edit($id){
        $products = Products::all();
    	$clients = Clients::all();
        return view("products_outputs.edit", ["products_outputs" => ProductsOutputs::findOrFail($id)])->with('clients',$clients)->with('products',$products);
    }

    public function update($id){
        $params = Request::all();
        $products_outputs = ProductsOutputs::findOrFail($id);
        $products_outputs->update($params);
        Session::flash('alert-success', 'Saída de produto atualizado com sucesso!');
        return redirect()->action("ProductsOutputsController@index");
    }

    public function destroy($id){
        $products_outputs = ProductsOutputs::findOrFail($id)->delete();
        Session::flash('alert-success', 'Saída de produto removido com sucesso!');
        return redirect()->action("ProductsOutputsController@index");
    }
}
