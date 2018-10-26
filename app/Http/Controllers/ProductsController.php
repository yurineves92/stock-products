<?php

namespace App\Http\Controllers;

use App\Products;
use App\Categories;
use Request;
use Session;

class ProductsController extends Controller
{
    public function index(Request $request){
    	if($request) {
            $query = trim(Request::get('searchText'));
            $products = Products::where('name','LIKE','%'.$query.'%')->orderBy('id','DESC')->paginate(25);
        }
        return view('products.index')->with('products',$products)->with('searchText',$query);
    }

    public function create(){
        $categories = Categories::all();
        return view('products.create')->with('categories',$categories);
    }

    public function store(){
        $params = Request::all();
        $products = new Products($params);
        $products->save();
        Session::flash('alert-success', 'Produto criado com sucesso!');
        return redirect()->action("ProductsController@index");
    }

    public function edit($id){
        $categories = Categories::all();
        return view("products.edit", ["product"=>Products::findOrFail($id)])->with('categories',$categories);
    }

    public function update($id){
        $params = Request::all();
        $product = Products::findOrFail($id);
        $product->update($params);
        Session::flash('alert-success', 'Produto atualizado com sucesso!');
        return redirect()->action("ProductsController@index");
    }

    public function destroy($id){
        $product = Products::findOrFail($id)->delete();
        Session::flash('alert-success', 'Produto removido com sucesso!');
        return redirect()->action("ProductsController@index");
    }
}
