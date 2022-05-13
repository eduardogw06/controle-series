@extends('layout')

@section('cabecalho')
Adicionar Séries
@endsection

@section('conteudo')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<form method="post">
    @csrf
    <div class="row mb-2">
        <div class="col col-8">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome">
        </div>

        <div class="col col-2">
            <label for="qtd_temporadas" class="form-label">Nº temporadas</label>
            <input type="number" class="form-control" name="qtd_temporadas" id="qtd_temporadas">
        </div>

        <div class="col col-2">
            <label for="ep_por_temporada" class="form-label">Ep. por temporadas</label>
            <input type="number" class="form-control" name="ep_por_temporada" id="ep_por_temporada">
        </div>
    </div>

    <div class="row">
        <div class="col col-3">
            <button class="btn btn-primary">Adicionar</button>
        </div>
    </div>

</form>
@endsection

