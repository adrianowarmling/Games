@extends('mainAdriano')

@section('content')
<div class="card text-center">
 <div class="card-header">
 <h3 class="card-title">Desenvolvedoras</h3>
</div>
</div>
<div class="card-header">

<table class="table table-striped">
    <thead class="thead-dark">
        <tr class='row'>
            <th class="col-2 center">ID</th>
            <th class="col-4 center">Nome</th>
            <th class="col-4 center">CEO</th>
            <th class="col-2 center">Ações</th>
        </tr>
    </thead>
    <tbody id="tabelaDesenvolvedora">
    </tbody>
</table>

<div class="card text-center">
<div class="card-body">
<h5>© All right Reversed. Adriano Warmling</h5>
</div>
</div>
@endsection