@extends('layout.main')
@section('content')
<section class="content-header">
	<br>
	<ol class="breadcrumb">
	  <li><a href="/"><i class="fa fa-dashboard"></i> Dashboard</a></li>
	  <li class="active"><i class="fa fa-plus-circle"></i> Saída de produtos</li>
	</ol>
</section>
<section class="content">
	<div class="box box-default">
	<div class="row">
		<div class="box-header with-border">
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
				<h3>Lista de saída de produtos <a href="products_outputs/create"><button class="btn btn-primary">Novo</button></a></h3>
			</div>
		</div>
	</div>

	<div class="box-body">
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
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-condensed table-hover">
						<thead>
							<th>ID</th>
							<th>Produto</th>
							<th>Quantidade</th>
							<th>Tipo de Movimento</th>
							<th>Descrição</th>
							<th>Cliente</th>
							<th>Data de Entrada</th>
							<th>Opções</th>
						</thead>
		               	@foreach ($products_outputs as $p)
						<tr>
							<td>{{ $p->id}}</td>
							<td>{{ $p->product->name}}</td>
							<td>{{ $p->amount}}</td>
							@include('products_outputs.type_movement')
							<td>{{ $p->note}}</td>
							<td>{{ $p->client->name}}</td>
							<td>{{ date('d/m/Y', strtotime($p->date_output)) }}</td>
							<td>
								<a href="{{URL::action('ProductsOutputsController@edit',$p->id)}}"><button class="btn btn-info">Editar</button></a>
		                         <a href="" data-target="#modal-delete-{{$p->id}}" data-toggle="modal"><button class="btn btn-danger">Excluir</button></a>
							</td>
						</tr>
						@include('products_outputs.modal')
						@endforeach
					</table>
				</div>
				{{$products_outputs->render()}}
			</div>
		</div>
	</div>
	</div>
</section>
@stop