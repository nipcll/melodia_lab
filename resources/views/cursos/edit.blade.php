@extends('layouts.app')

@section('content')
    <h1>Editar Curso</h1>

    <form action="{{ route('cursos.update', $curso->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="titulo">Título do Curso</label>
            <input type="text" name="titulo" class="form-control" value="{{ $curso->titulo }}" required>
        </div>
        
        <div class="form-group">
            <label for="descricao">Descrição do Curso</label>
            <textarea name="descricao" class="form-control" required>{{ $curso->descricao }}</textarea>
        </div>

        <div class="form-group">
            <label for="recursos">Recursos</label>
            <textarea name="recursos" class="form-control">{{ $curso->recursos }}</textarea>
        </div>

        <div class="form-group">
            <label for="objetivos">Objetivos</label>
            <textarea name="objetivos" class="form-control">{{ $curso->objetivos }}</textarea>
        </div>

        <div class="form-group">
            <label for="observacoes">Observações</label>
            <textarea name="observacoes" class="form-control">{{ $curso->observacoes }}</textarea>
        </div>

        <div class="form-group">
            <label for="imagem">Imagem</label>
            <input type="text" name="imagem" class="form-control" value="{{ $curso->imagem }}">
        </div>

        <button type="submit" class="btn btn-success">Salvar Alterações</button>
        <a href="{{ route('perfil.index') }}" class="btn btn-secondary">Voltar</a>
    </form>
@endsection
