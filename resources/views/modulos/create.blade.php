@extends('layouts.app')

@section('content')
    <h1>Criar Módulo</h1>

    <form action="{{ route('modulos.store', $cursoId) }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="titulo">Título do Módulo</label>
            <input type="text" name="titulo" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label for="descricao">Descrição do Módulo</label>
            <textarea name="descricao" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="imagem">Imagem do Módulo</label>
            <input type="text" name="imagem" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Criar Módulo</button>
    </form>
@endsection
