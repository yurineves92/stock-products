@extends('layout.main')
@section('content')
<section class="content-header">
	<br>
	<ol class="breadcrumb">
	  <li><a href="/"><i class="fa fa-dashboard"></i> Dashboard</a></li>
	  <li><a href="/users"><i class="fa fa-plus-circle"></i> Usuários</a></li>
	  <li class="active"><i class="fa fa-plus"></i> Formulário</li>
	</ol>
</section>
<section class="content">
	<div class="box box-default">
		<div class="row">
			<div class="box-header with-border">
				<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
					<h3>Formulário</h3>
				</div>
			</div>
		</div>
		<div class="box-body">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					@if (count($errors)>0)
					<div class="alert alert-danger">
						<ul>
						@foreach ($errors->all() as $error)
							<li>{{$error}}</li>
						@endforeach
						</ul>
					</div>
					@endif
					@if ($message = Session::get('alert-success'))
				      	<div class="alert alert-success alert-block">
				        	<button type="button" class="close" data-dismiss="alert">X</button> 
				            	<strong>{{ $message }}</strong>
				      	</div>
				    @elseif ($message = Session::get('alert-danger'))
				      	<div class="alert alert-danger alert-block">
				        	<button type="button" class="close" data-dismiss="alert">X</button> 
				            	<strong>{{ $message }}</strong>
				      	</div>
				    @endif
	         		{!!Form::model($user, ['method'=>'PATCH', 'route'=>['users.update', $user->id]])!!}
		            {{Form::token()}}
		            <input type="hidden" name="status" value="{{1}}">
		            <input type="hidden" name="type_form" value="update">
		            <div class="form-group">
		            	<label for="nome">Nome</label>
		            	<input type="text" name="name" class="form-control" value="{{ $user->name }}" placeholder="Nome...">
		            </div>
		            <div class="form-group">
		            	<label for="nome">Email</label>
		            	<input type="text" name="email" class="form-control" value="{{ $user->email }}" placeholder="Email...">
		            </div>
		            <div class="form-group">
		            	<label for="nome">Senha</label>
		            	<input type="password" name="password" class="form-control" placeholder="Senha...">
		            </div>
		            <div class="form-group">
		            	<label for="nome">Repetir senha</label>
		            	<input type="password" name="remember_password" class="form-control" placeholder="Repetir a senha...">
		            </div>
		            <div class="form-group">
		            	<button class="btn btn-primary" type="submit">Salvar</button>
		            	<a href="/users" class="btn btn-default">Cancelar</a>
		            </div>

					{!!Form::close()!!}		
		            
				</div>
			</div>
		</div>
	</div>
</section>
@stop