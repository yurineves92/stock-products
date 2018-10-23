@extends('layout.main')
@section('content')
<section class="content-header">
      <br>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="/products"><i class="fa fa-plus-circle"></i> Produtos</a></li>
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

            	</div>
            </div>
		{!!Form::open(array('url'=>'products','method'=>'POST','autocomplete'=>'off', 'files'=>'true'))!!}
            {{Form::token()}}
            <div class="row">
            	<div class="col-lg-6 col-sm-6 col-xs-12">
	            	<div class="form-group">
	            	<label for="nome">Nome</label>
	            	<input type="text" name="name" required value="{{old('name')}}" class="form-control" placeholder="Nome...">
	            	</div>
            	</div>

            	<div class="col-lg-6 col-sm-6 col-xs-12">
            		<div class="form-group">
            		<label>Categoria</label>
            		<select name="category_id" class="form-control">
	            		@foreach($categories as $c)
	            		<option value="{{$c->id}}">
	            		{{$c->name}}
	            		</option>
	            		@endforeach
            		</select>
            		</div>
            		
            	</div>

            		
            	
            	<div class="col-lg-6 col-sm-6 col-xs-12">
            		<div class="form-group">
	            	<label for="codigo">Código</label>
	            	<input type="number" name="code" required value="{{old('code')}}" class="form-control" placeholder="Código do Produto...">
	            	</div>
            		
            	</div>
            		
            	<div class="col-lg-6 col-sm-6 col-xs-12">
            		<div class="form-group">
	            	<label for="estoque">Estoque</label>
	            	<input type="text" name="amount" required value="{{old('amount')}}" class="form-control" placeholder="Estoque...">
	            	</div>	
            		
            	</div>

            	<div class="col-lg-6 col-sm-6 col-xs-12">
            		<div class="form-group">
            	           <label for="descricao">Descrição</label>
            	           <input type="text" name="description" class="form-control" placeholder="Descrição...">
            		</div>
            	</div>

            	<div class="col-lg-6 col-sm-6 col-xs-12">
            		 <div class="form-group">
            	           <label for="imagem">Imagem</label>
            	           <input type="file" name="image" class="form-control">
            		</div>
            	</div>
            </div>

            <div class="form-group">
            	<button class="btn btn-primary" type="submit">Salvar</button>
            	<a href="/products" class="btn btn-default">Cancelar</a>
            </div>
		{!!Form::close()!!}		
      </div>
</div>
</section>
@stop