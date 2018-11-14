@extends('mainAdriano')

@section('content')

<table class="table table-striped">
    <thead class="thead-dark">
        <tr class='row'>
            <th class="col-2 center">ID</th>
            <th class="col-8 center">Descrição</th>
            <th class="col-2 center">Ações</th>
        </tr>
    </thead>
    <tbody id="tabelaGeneros">
    </tbody>
</table>

@endsection