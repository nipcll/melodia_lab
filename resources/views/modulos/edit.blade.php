@extends('layouts.app')

@section('content')
    <h1>Editar Módulo</h1>

    <form action="{{ route('modulos.update', $modulo->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="titulo">Título do Módulo</label>
            <input type="text" name="titulo" class="form-control" value="{{ $modulo->titulo }}" required>
        </div>
        
        <div class="form-group">
            <label for="descricao">Descrição do Módulo</label>
            <textarea name="descricao" class="form-control">{{ $modulo->descricao }}</textarea>
        </div>

        <div class="form-group">
            <label for="imagem">Imagem do Módulo</label>
            <input type="text" name="imagem" class="form-control" value="{{ $modulo->imagem }}">
        </div>

        <button type="submit" class="btn btn-success">Salvar Alterações</button>
    </form>
@endsection
