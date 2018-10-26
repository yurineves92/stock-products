<?php

namespace App\Http\Controllers;

use App\ProductsEntries;
use App\Suppliers;
use App\Products;
use Request;
use Session;

class ProductsEntriesController extends Controller
{
    public function index(){
    	$products_entries = ProductsEntries::paginate(25);
    	return view('products_entries.index')->with('products_entries',$products_entries);
    }

    public function create(){
    	$products = Products::all();
    	$suppliers = Suppliers::all();
    	return view('products_entries.create')->with('suppliers',$suppliers)->with('products',$products);
    }

    public function store(){
    	$params = Request::all();
    	$products_entries = new ProductsEntries($params);
    	$products_entries->save();
    	Session::flash('alert-success', 'Entrada de produto criado com sucesso!');
        return redirect()->action("ProductsEntriesController@index");
    }

    public function edit($id){
        $products = Products::all();
    	$suppliers = Suppliers::all();
        return view("products_entries.edit", ["products_entries" => ProductsEntries::findOrFail($id)])->with('suppliers',$suppliers)->with('products',$products);
    }

    public function update($id){
        $params = Request::all();
        $products_entries = ProductsEntries::findOrFail($id);
        $products_entries->update($params);
        Session::flash('alert-success', 'Entrada de produto atualizado com sucesso!');
        return redirect()->action("ProductsEntriesController@index");
    }

    public function destroy($id){
        $products_entries = ProductsEntries::findOrFail($id)->delete();
        Session::flash('alert-success', 'Entrada de produto removido com sucesso!');
        return redirect()->action("ProductsEntriesController@index");
    }
}
