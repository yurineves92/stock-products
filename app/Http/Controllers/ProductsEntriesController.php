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
    	$products_entries = ProductsEntries::all();
    	return view('products_entries.index')
    }

    public function create(){

    }

    public function store(){
    	
    }

    public function edit(){
    	
    }

    public function update(){
    	
    }

    public function destroy(){
    	
    }
}
