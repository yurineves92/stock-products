<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\ResetsPasswords;
use App\User;
use Request;
use Hash;
use Session;
use Auth;

class UserController extends Controller
{   
    public function login(){
    	return view('auth.login');
    }
    public function register(){
    	return view('auth.register');
    }
    public function email(){
        return view('auth.passwords.email');
    }
    public function reset(){
        return view('auth.passwords.reset');
    }

    public function index(Request $request){
    	if($request) {
    		$query = trim(Request::get('searchText'));
    		$users = User::where('name','LIKE','%'.$query.'%')->orderBy('id','DESC')->paginate(25);
    	}
    	return view('users.index')->with('users',$users)->with('searchText',$query);
    }

    public function authenticate(){
    	$credenciais = Request::only('email','password');
    	if(Auth::attempt($credenciais)) {
            // Authentication passed...
            Session::flash('alert-success', 'Logado com sucesso!');
            return redirect('/');
        }else{
        	Session::flash('alert-danger', 'O email e a senha estão incorretos, digite novamente!');
        	return redirect()->action("UserController@login");
        }
    }
    public function create(){
        return view('users.create');
    }

    public function store(){
    	$params = Request::all();
    	$user = User::all();
    	foreach($user as $u){
    		if($u['email'] == $params['email']){
    			Session::flash('alert-danger', 'Já existe esse email cadastrado no nosso sistema!');
    			return redirect()->action("UserController@create");	
    		}
    	}
    	if($params['password'] != $params['remember_password']){
    		Session::flash('alert-warning', 'As senhas não se conferem!');
    		return redirect()->action("UserController@create");	
    	}
    	$params['password'] = Hash::make($params['password']);
    	$user = new User($params);
        $user->save();
        if($params['type_form'] == "create"){
            Session::flash('alert-success', 'Conta criada com sucesso!');
            return redirect()->action("UserController@index");
        } else {
            Session::flash('alert-success', 'Conta criada com sucesso!');
            return redirect()->action("UserController@login");  
        }
    	
    }
    public function edit($id){
    	return view("users.edit", ["user"=>User::findOrFail($id)]);
    }

    public function update($id){
        $params = Request::all();
    	$client = User::findOrFail($id);
    	$client->update($params);
    	Session::flash('alert-success', 'Cliente atualizado com sucesso!');
    	return redirect()->action("UserController@index");
    }

    public function destroy($id){
    	$client = User::findOrFail($id)->delete();
    	Session::flash('alert-success', 'Cliente removido com sucesso!');
    	return redirect()->action("UserController@index");
    }
    public function logout(){
    	Auth::logout();
    	Session::flash('alert-info', 'Deslogado com sucesso!');
        return redirect()->action("UserController@login");
    }
}
