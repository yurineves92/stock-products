@extends('layout.main')
@section('content')
<section class="content-header">
      <br>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="/suppliers"><i class="fa fa-plus-circle"></i> Fornecedores</a></li>
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

	     {!!Form::model($supplier, ['method'=>'PATCH', 'route'=>['suppliers.update', $supplier->id]])!!}
	     {{Form::token()}}

            <div class="row">            	
            	<div class="col-lg-6 col-sm-6 col-xs-12">
	            	<div class="form-group">
	            	<label for="nome">Nome</label>
	            	<input type="text" name="name" required value="{{$supplier->name}}" class="form-control" placeholder="Nome...">
	            	</div>
            	</div>
            	<div class="col-lg-6 col-sm-6 col-xs-12">
            		<div class="form-group">
                  		<label>Tipo Documento</label>
                  		<select name="document_type" class="form-control">
      	            		<option value="CPF">CPF</option>
      	            		<option value="CNPJ">CNPJ</option>
                  		</select>
            		</div>	
            	</div>
            	
            	<div class="col-lg-6 col-sm-6 col-xs-12">
            		<div class="form-group">
	            	    <label for="num_doc">Número Documento</label>
	            	    <input type="text" name="document_number" required  value="{{$supplier->document_number}}" class="form-control" placeholder="Número do Documento...">
	            	</div>
            	</div>
            		
            	<div class="col-lg-6 col-sm-6 col-xs-12">
            		<div class="form-group">
	            	    <label for="endereco">Endereço</label>
	            	    <input type="text" name="address" required value="{{$supplier->address}}" class="form-control" placeholder="Endereço...">
	            	</div>	
            	</div>

            	<div class="col-lg-6 col-sm-6 col-xs-12">
            		<div class="form-group">
            	           <label for="telefone">Telefone</label>
                              <input type="text" name="phone" class="form-control" value="{{$supplier->phone}}" placeholder="Telefone...">
            		</div>
            	</div>
            	<div class="col-lg-6 col-sm-6 col-xs-12">
            		<div class="form-group">
            	           <label for="email">Email</label>
            	           <input type="text" name="email" value="{{$supplier->email}}" class="form-control">
            		</div>
            	</div>
            </div>

            <div class="form-group">
            	<button class="btn btn-primary" type="submit">Salvar</button>
            	<a href="/suppliers" class="btn btn-default">Cancelar</a>
            </div>
		{!!Form::close()!!}
      </div>
      </div>
</section>		
            
	
@stop