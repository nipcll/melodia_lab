@extends('layouts.app')

@section('content')
    <h1>Editar Pergunta</h1>

    <form action="{{ route('perguntas.update', $pergunta->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="texto">Texto da Pergunta</label>
            <textarea name="texto" class="form-control" required>{{ $pergunta->texto }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Salvar Alterações</button>
    </form>
@endsection
