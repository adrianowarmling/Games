@extends('mainAdriano')

@section('content')

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

@endsection