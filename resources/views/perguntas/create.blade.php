@extends('layouts.app')

@section('content')
    <h1>Criar Pergunta</h1>

    <form action="{{ route('perguntas.store', $provaId) }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="texto">Texto da Pergunta</label>
            <textarea name="texto" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-success">Criar Pergunta</button>
    </form>
@endsection
