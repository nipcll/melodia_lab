@extends('layouts.app')

@section('content')
    <h1>Editar Aula</h1>

    <form action="{{ route('aulas.update', $aula->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="descricao">Descrição da Aula</label>
            <input type="text" name="descricao" class="form-control" value="{{ $aula->descricao }}" required>
        </div>
        
        <div class="form-group">
            <label for="conteudo">Conteúdo da Aula</label>
            <textarea name="conteudo" class="form-control" required>{{ $aula->conteudo }}</textarea>
        </div>

        <div class="form-group">
            <label for="pdf">PDF da Aula</label>
            <input type="text" name="pdf" class="form-control" value="{{ $aula->pdf }}">
        </div>

        <div class="form-group">
            <label for="imagem">Imagem da Aula</label>
            <input type="text" name="imagem" class="form-control" value="{{ $aula->imagem }}">
        </div>

        <button type="submit" class="btn btn-success">Salvar Alterações</button>
    </form>
@endsection
