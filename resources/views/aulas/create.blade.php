@extends('layouts.app')

@section('content')
    <h1>Criar Aula</h1>

    <form action="{{ route('aulas.store', $moduloId) }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="descricao">Descrição da Aula</label>
            <input type="text" name="descricao" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label for="conteudo">Conteúdo da Aula</label>
            <textarea name="conteudo" class="form-control" required></textarea>
        </div>

        <div class="form-group">
            <label for="pdf">PDF da Aula</label>
            <input type="text" name="pdf" class="form-control">
        </div>

        <div class="form-group">
            <label for="imagem">Imagem da Aula</label>
            <input type="text" name="imagem" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Criar Aula</button>
    </form>
@endsection
