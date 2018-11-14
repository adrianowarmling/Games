@extends('mainAdriano')

@section('content')

<form action="/api/desenvolvedora" method="PUT">
        <div class="form-group">
            <label for="id">ID:</label>
            <input type="number" required readonly value="{{ $id }}" name="id" id="id" required class="form-control" placeholder="Id">
        </div>
        <div class="form-group">
            <label for="nome_desenvolvedora">Nome:</label>
            <input type="text" name="nome_desenvolvedora" value="{{ $model->nome_desenvolvedora }}" id="nome_desenvolvedora"required class="form-control" placeholder="nome da desenvolvedora">
        </div>
        <div class="form-group">
            <label for="ceo">CEO</label>
            <input type="text" name="ceo" value="{{ $model->ceo }}" id="ceo" required class="form-control" placeholder="ceo">
        </div>
       
        <div class="form-group">
        <button type="submit" id="altera-desenvolvedora" class="btn btn-success totalwidth">Submit</button>
        </div>
    </form>

@endsection