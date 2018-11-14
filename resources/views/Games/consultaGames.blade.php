@extends('mainAdriano')

@section('content')

<div class="card text-center">
 <div class="card-header">
 <h3 class="card-title">Games</h3>
  


<table class="table table-striped">
    <thead class="thead-dark">
        <tr class='row'>
            <th class="col-1 center">ID</th>
            <th class="col-2 center">Nome</th>
            <th class="col-1 center">Ano</th>
            <th class="col-1 center">Faixa Etária</th>
            <th class="col-2 center">Desenvolvedora</th>
            <th class="col-2 center">Plataforma</th>
            <th class="col-1 center">Gênero</th>
            <th class="col-2 center">Ações</th>
        </tr>
    </thead>
    <tbody id="tabelaGames">
    </tbody>
</table>
</div>
<div class="card-body">
<h5>© All right Reversed. Adriano Warmling</h5>
</div>
</div>
@endsection