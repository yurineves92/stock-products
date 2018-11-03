@extends('layout.main')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Contato
  </h1>
</section>
<section class="content">
	<div class="box box-default">
      	<div class="box-header with-border">
        <h3 class="box-title">Formulário</b></h3>
      	</div>
      	<div class="box-body">
          <form method="POST" action="/authenticate" aria-label="{{ __('Register') }}">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
	        <div class="col-lg-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" name="name" required value="{{old('nome')}}" class="form-control" placeholder="Nome...">
                </div>
          </div>
          <div class="col-lg-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label for="nome">Email</label>
                    <input type="email" name="email" required value="{{old('nome')}}" class="form-control" placeholder="Email...">
                </div>
              </div>
          <div class="col-lg-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label for="nome">Mensagem</label>
                     <textarea name="note" class="form-control" rows="4" cols="70"></textarea>
                </div>
          </div>
          <div class="col-lg-6 col-sm-6 col-xs-12">
               <p>What is Lorem Ipsum?
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
          </div>
           <div class="col-sm-6">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Enviar</button>
          </div>
          </form>
    	  </div>
	</div>
</section>
@endsection