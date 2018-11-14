@extends('mainAdriano')

@section('content')
<div class="card text-center">
 <div class="card-header">
 <h3 class="card-title">Cadastrar um Game</h3>
</div>
</div>
<div class="card-header">

<form action="/api/games" method="POST">
        <div class="form-group">
            <label for="id">ID:</label>
            <input type="number" required readonly value="{{ $id }}" name="id" id="id" required class="form-control" placeholder="Id">
        </div>
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required class="form-control" placeholder="Nome">
        </div>
        <div class="form-group">
            <label for="ano">Ano:</label>
            <input type="date" name="ano" id="ano" required class="form-control" placeholder="Ano">
        </div>
        <div class="form-group">
            <label for="fx_etaria">Faixa Etária:</label>
            <input type="number" name="fx_etaria" id="fx_etaria" required class="form-control" placeholder="Faixa Etária">
        </div>
        <div class="form-group">
            <label for="desenvolvedora_id">Desenvolvedora:</label>
            <!-- <input type="number" name="desenvolvedora_id" id="desenvolvedora_id" required class="form-control" placeholder="Código da Desenvolvedora"> -->

            <select id="desenvolvedora_id" name="desenvolvedora_id" class="form-control">
                @foreach ($desenvolvedoras as $desenvolvedora)
                    <option value="{{ $desenvolvedora->id }}">{{ $desenvolvedora->nome_desenvolvedora }}</option>
                @endforeach
            </select>
        </div>


        <div class="form-group">
            <label for="tipo_id">Plataforma:</label>
            <!-- <input type="number" name="tipo_id" id="tipo_id" required class="form-control" placeholder="Código da Plataforma"> -->
       
            <select id="tipo_id" name="tipo_id" class="form-control">
                @foreach ($plataformas as $plataforma)
                    <option value="{{ $plataforma->id }}">{{ $plataforma->tipo }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="genero_id">Gênero:</label>
            <!-- <input type="number" name="genero_id" id="genero_id" required class="form-control" placeholder="Código do Gênero"> -->
       
            <select id="genero_id" name="genero_id" class="form-control">
                @foreach ($generos as $genero)
                    <option value="{{ $genero->id }}">{{ $genero->descricao }}</option>
                @endforeach
            </select>
        </div>


        <div class="form-group">
        <button type="submit" id="cadastrar-games" class="btn btn-success totalwidth">Submit</button>
        </div>
    </form>
    </div>
    </div>
<div class="card text-center">
<div class="card-body">
<h5>© All right Reversed. Adriano Warmling</h5>
</div>
</div>
@endsection