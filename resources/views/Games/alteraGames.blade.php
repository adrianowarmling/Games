@extends('mainAdriano')

@section('content')

<form action="/api/games" method="PUT">
        <div class="form-group">
            <label for="id">ID:</label>
            <input type="number" required readonly value="{{ $id }}" name="id" id="id" required class="form-control" placeholder="Id">
        </div>
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" value="{{ $model->nome}}" id="nome" required class="form-control" placeholder="Nome">
        </div>
        <div class="form-group">
            <label for="ano">Ano:</label>
            <input type="date" name="ano" value="{{ $model->ano}}" id="ano" required class="form-control" placeholder="Ano">
        </div>
        <div class="form-group">
            <label for="fx_etaria">Faixa Etária:</label>
            <input type="number" name="fx_etaria" value="{{ $model->fx_etaria}}" id="fx_etaria" required class="form-control" placeholder="Faixa Etária">
        </div>
        <div class="form-group">
            <label for="desenvolvedora_id">Desenvolvedora:</label>

            <select id="desenvolvedora_id" name="desenvolvedora_id" class="form-control">
                @foreach ($desenvolvedoras as $desenvolvedora)
                    <option selected="selected" value="{{ $desenvolvedora->id }}">{{ $desenvolvedora->nome_desenvolvedora }} </option>
                @endforeach
            </select>
        </div>


        <div class="form-group">
            <label for="tipo_id">Plataforma:</label>
       
            <select id="tipo_id" name="tipo_id" class="form-control">
                @foreach ($plataformas as $plataforma)
                    <option selected="selected" value="{{ $plataforma->id }}">{{ $plataforma->tipo }}</option>
                @endforeach
            </select>

        </div>

        <div class="form-group">
            <label for="genero_id">Gênero:</label>
           
            <select id="genero_id" name="genero_id" class="form-control">
                @foreach ($generos as $genero)
                    <option value="{{ $genero->id }}">{{ $genero->descricao }}</option>
                @endforeach
            </select>

        </div>


        <div class="form-group">
        <button type="submit" id="altera-games" class="btn btn-success totalwidth">Submit</button>
        </div>
    </form>

@endsection