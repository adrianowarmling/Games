@extends('mainAdriano')

@section('content')
<div class="card text-center">
 <div class="card-header">
 <h3 class="card-title">Cadastrar Genero</h3>
</div>
</div>
<div class="card-header">

<form action="/api/generos" method="POST">
        <div class="form-group">
            <label for="id">ID:</label>
            <input type="number" required readonly value="{{ $id }}" name="id" id="id" required class="form-control" placeholder="Id">
        </div>
        
        <div class="form-group">
            <label for="descricao">Descrição:</label>
            <input type="text" name="descricao" id="descricao" required class="form-control" placeholder="descricao">
        </div>
       
        <div class="form-group">
        <button type="submit" id="cadastrar-generos" class="btn btn-success totalwidth">Submit</button>
        </div>
    </form>

</div>
<div class="card text-center">
<div class="card-body">
<h5>© All right Reversed. Adriano Warmling</h5>
</div>
</div>

@endsection