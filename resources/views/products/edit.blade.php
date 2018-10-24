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
            {!!Form::model($product, ['method'=>'PATCH','files'=>'true', 'route'=>['products.update', $product->id]])!!}
            {{Form::token()}}

            <div class="row">
                  <div class="col-lg-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" name="name" required value="{{ $product->name }}" class="form-control" placeholder="Nome...">
                        </div>
                  </div>

                  <div class="col-lg-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                        <label>Categoria</label>
                        <select name="category_id" class="form-control">
                              @foreach($categories as $c)
                                    @if($c->id = $product->category_id)
                                          <option value="{{$c->id}}" selected>{{$c->name}}</option>
                                    @else
                                          <option value="{{$c->id}}">{{$c->name}}</option>
                                    @endif
                              @endforeach
                        </select>
                        </div>
                        
                  </div>

                  <div class="col-lg-6 col-sm-6 col-xs-12">
                      <div class="form-group">
                          <label for="estoque">Estoque mínimo</label>
                          <input type="number" name="min_stock" required value="{{ $product->min_stock }}" class="form-control" placeholder="Estoque mínimo...">
                      </div>      
                  </div>

                  <div class="col-lg-6 col-sm-6 col-xs-12">
                      <div class="form-group">
                          <label for="estoque">Estoque máximo</label>
                          <input type="number" name="max_stock" required value="{{ $product->max_stock }}"" class="form-control" placeholder="Estoque mínimo...">
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