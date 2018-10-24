<?php

namespace App\Http\Controllers;

use App\Clients;
use Request;
use Session;

class ClientsController extends Controller
{
    public function index(Request $request){
    	if($request) {
    		$query = trim(Request::get('searchText'));
    		$clients = Clients::where('name','LIKE','%'.$query.'%')->orderBy('id','DESC')->paginate(25);
    	}
    	return view('clients.index')->with('clients',$clients)->with('searchText',$query);
    }

    public function create(){
    	return view('clients.create');
    }
    public function store(){
    	$params = Request::all();
    	$client = new Clients($params);
    	$client->save();
    	Session::flash('alert-success', 'Cliente criado com sucesso!');
    	return redirect()->action("ClientsController@index");
    }

    public function edit($id){
    	return view("clients.edit", ["client"=>Clients::findOrFail($id)]);
    }

    public function update($id){
        $params = Request::all();
    	$client = Clients::findOrFail($id);
    	$client->update($params);
    	Session::flash('alert-success', 'Cliente atualizado com sucesso!');
    	return redirect()->action("ClientsController@index");
    }

    public function destroy($id){
    	$client = Clients::findOrFail($id)->delete();
    	Session::flash('alert-success', 'Cliente removido com sucesso!');
    	return redirect()->action("ClientsController@index");
    }
}
