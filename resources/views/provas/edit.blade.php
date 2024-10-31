@extends('layouts.app')

@section('content')
    <h1>Editar Prova</h1>

    <form action="{{ route('provas.update', $prova->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="titulo">Título da Prova</label>
            <input type="text" name="titulo" class="form-control" value="{{ $prova->titulo }}" required>
        </div>

        <div class="form-group">
            <label for="imagem">Imagem da Prova</label>
            <input type="text" name="imagem" class="form-control" value="{{ $prova->imagem }}">
        </div>

        <button type="submit" class="btn btn-success">Salvar Alterações</button>
    </form>
@endsection
