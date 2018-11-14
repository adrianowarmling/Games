@extends('mainAdriano')

@section('content')

<form action="/api/plataforma" method="POST">
        <div class="form-group">
            <label for="id">ID:</label>
            <input type="number" required readonly value="{{ $id }}" name="id" id="id" required class="form-control" placeholder="Id">
        </div>
        
        <div class="form-group">
            <label for="tipo">Tipo</label>
            <input type="text" name="tipo" id="tipo" required class="form-control" placeholder="tipo">
        </div>
       
        <div class="form-group">
        <button type="submit" id="cadastrar-plataforma" class="btn btn-success totalwidth">Submit</button>
        </div>
    </form>

@endsection