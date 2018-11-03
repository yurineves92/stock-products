<title>Relatório</title>
<style>
  table, td, th {
    text-align: center;
    border: 1px solid black;
  }

  table {
      border-collapse: collapse;
      width: 100%;
  }

  th {
      height: 25px;
  }

</style>
<div>
  <h2 class="text-center">Lista de Produtos</h2>
  <h4 class="text-center"><p>Relatório tirado no dia: {{ date('d/m/Y', strtotime($date)) }} </p></h4>
  @if(!empty($category))
  <h4 class="text-center"><p>Categoria: {{ $category->name }} </p></h4>
  @else
  <h4 class="text-center"><p>Todos os produtos</p></h4>
  @endif
  <hr/>
</div>
<div class="table-responsive">
  <table class="table-striped table-bordered table-hover table" style="font-size:12px;">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Min.Estoque</th>
        <th>Max.Estoque</th>
        <th>Quantidade</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($products as $p)
      <tr>
        <td>{{ $p->id}}</td>
        <td>{{ $p->name}}</td>
        <td>{{ $p->min_stock}}</td>
        <td>{{ $p->max_stock}}</td>
        <td>{{ $p->amount}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>