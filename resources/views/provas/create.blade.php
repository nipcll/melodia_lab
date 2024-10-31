@extends('layouts.app')

@section('content')
    <h1>Criar Prova</h1>

    <form action="{{ route('provas.store', $aulaId) }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="titulo">Título da Prova</label>
            <input type="text" name="titulo" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="imagem">Imagem da Prova</label>
            <input type="text" name="imagem" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Criar Prova</button>
    </form>
@endsection
