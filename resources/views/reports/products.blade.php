@extends('layout.main')

@section('content')
<section class="content">
	<div class="box box-default">
      	<div class="box-header with-border">
                  <h3 class="box-title">Relatório de produtos</b></h3>
      	</div>
      <div class="box-body">
      	<form action="/pdf/products" method="POST" target="_blank">
        {{Form::token()}}
	     	<div class="row">
            	<div class="col-lg-4 col-sm-4 col-xs-12">
            		<div class="form-group">
            		 	<label>Categoria:</label>
                 		 	<select name="category_id" class="form-control">
                            <option disabled selected>Selecione...</option>
                            @foreach($categories as $c)
                            <option value="{{$c->id}}">{{$c->name}}</option>
                            @endforeach
                      </select> 
            		</div>
            	</div>
            </div>
            <div class="form-group">
	          	<button class="btn btn-primary" type="submit" target="_blank">Gerar PDF</button>
	      </div>
	    	</form>
    	</div>
	</div>
</section>
@endsection