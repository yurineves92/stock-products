@extends('layout.main')
@section('content')
<section class="content-header">
	<br>
	<ol class="breadcrumb">
	  <li><a href="/"><i class="fa fa-dashboard"></i> Dashboard</a></li>
	  <li><a href="/categories"><i class="fa fa-plus-circle"></i> Categorias</a></li>
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

					{!!Form::model($category, ['method'=>'PATCH', 'route'=>['categories.update', $category->id]])!!}
					{{Form::token()}}

		            <div class="form-group">
		            	<label for="nome">Nome</label>
		            	<input type="text" name="name" class="form-control" value="{{ $category->name }}" placeholder="Nome...">
		            </div>
		            <div class="form-group">
		            	<label for="descricao">Descrição</label>
						<input type="text" name="description" class="form-control" value="{{ $category->description }}" placeholder="Descrição...">
		            </div>
		            <div class="form-group">
		            	<button class="btn btn-primary" type="submit">Salvar</button>
		            	<a href="/categories" class="btn btn-default">Cancelar</a>
		            </div>

					{!!Form::close()!!}		
		        </div>
				</div>
			</div>
		</div>
</section>
@stop