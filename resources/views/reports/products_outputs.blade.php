@extends('layout.main')

@section('content')
<section class="content">
	<div class="box box-default">
      	<div class="box-header with-border">
                  <h3 class="box-title">Relatório de saída de produtos</b></h3>
      	</div>
      <div class="box-body">
      	<form action="/pdf/products_outputs" method="POST" target="_blank">
            {{Form::token()}}
	     	<div class="row">
            	<div class="col-lg-4 col-sm-4 col-xs-12">
            		<div class="form-group">
            		 	<label>De:</label>
            		 	<input type="date" name="date_initial" required class="form-control" placeholder="Selecione...">
            		</div>
            	</div>
            	<div class="col-lg-4 col-sm-4 col-xs-12">
            		<div class="form-group">
            		 	<label>Até:</label>
            		 	<input type="date" name="date_final" required class="form-control" placeholder="Selecione...">
            		</div>
            	</div>
            </div>
            <div class="form-group">
	          	<button class="btn btn-primary" type="submit">Gerar PDF</button>
	        </div>
	    	</form>
    	</div>
	</div>
</section>
@endsection