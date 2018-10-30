<?php

namespace App\Http\Controllers;

use App\ProductsEntries;
use App\ProductsOutputs;
use App\Suppliers;
use App\Products;
use App\Clients;

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
    	return view('reports.products');
    }
    public function suppliers(){
    	$suppliers = Suppliers::all();
    	return view('reports.suppliers')->with('suppliers',$suppliers);
    }
    public function pdf_products_entries(){
        $params = Request::all();
        $products_entries = ProductsEntries::whereRaw('date_entry', array($params['date_final'], $params['date_initial']))->get();
        $date = date('Y-m-d H:i:s');
        $pdf = PDF::loadView('pdf.products_entries',compact('products_entries','date'));
        return $pdf->stream();
    }
}
