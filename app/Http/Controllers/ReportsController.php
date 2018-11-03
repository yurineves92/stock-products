<?php

namespace App\Http\Controllers;

use App\ProductsEntries;
use App\ProductsOutputs;
use App\Suppliers;
use App\Products;
use App\Clients;
use App\Categories;
use Request;
use Session;
use PDF;
use DB;

class ReportsController extends Controller
{
    public function products_entries(){
    	return view('reports.products_entries');
    }
    public function products_outputs(){
    	return view('reports.products_outputs');
    }
    public function products(){
        $categories = Categories::all();
    	return view('reports.products')->with('categories',$categories);
    }
    public function suppliers(){
    	$suppliers = Suppliers::all();
    	return view('reports.suppliers')->with('suppliers',$suppliers);
    }
    public function pdf_products_entries(){
        $params = Request::all();
        $products_entries = ProductsEntries::where('date_entry', '>=', $params['date_initial'])->where('date_entry', '<=', $params['date_final'])->get();
        $date = date('Y-m-d H:i:s');
        $pdf = PDF::loadView('pdf.products_entries',compact('products_entries','date'));
        return $pdf->stream();
    }
    public function pdf_products_outputs(){
        $params = Request::all();
        $products_outputs = ProductsOutputs::where('date_output', '>=', $params['date_initial'])->where('date_output', '<=', $params['date_final'])->get();
        $date = date('Y-m-d H:i:s');
        $pdf = PDF::loadView('pdf.products_outputs',compact('products_outputs','date'));
        return $pdf->stream();
    }
    public function pdf_products(){
        $params = Request::all();
        if(!empty($params['category_id'])){
            $category = Categories::find($params['category_id']);
            $products = Products::where('category_id','=',$params['category_id'])->get();
        } else {
            $products = Products::all();
        }
        $date = date('Y-m-d H:i:s');
        $pdf = PDF::loadView('pdf.products',compact('products','date','category'));
        return $pdf->stream();
    }
    public function pdf_suppliers(){
        $params = Request::all();
        $supplier = Suppliers::find($params['supplier_id']);
        $products = ProductsEntries::where('date_entry', '>=', $params['date_initial'])->where('date_entry', '<=', $params['date_final'])->where('supplier_id','=',$params['supplier_id'])->get();
        $date = date('Y-m-d H:i:s');
        $pdf = PDF::loadView('pdf.suppliers',compact('products','date','supplier'));
        return $pdf->stream();
    }
}
