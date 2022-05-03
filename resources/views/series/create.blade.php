@extends('layout')

@section('cabecalho')
Adicionar Séries
@endsection

@section('conteudo')
<form method="post">
    <div class="form-group mb-2">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome">
    </div>

    <button class="btn btn-primary">Adicionar</button>
</form>
@endsection

