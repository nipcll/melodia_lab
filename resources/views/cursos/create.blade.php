@extends('layouts.app')

@section('content')
    <h1>Criar Curso</h1>

    <form action="{{ route('cursos.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="titulo">Título do Curso</label>
            <input type="text" name="titulo" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label for="descricao">Descrição do Curso</label>
            <textarea name="descricao" class="form-control" required></textarea>
        </div>

        <div class="form-group">
            <label for="recursos">Recursos</label>
            <textarea name="recursos" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="objetivos">Objetivos</label>
            <textarea name="objetivos" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="observacoes">Observações</label>
            <textarea name="observacoes" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="imagem">Imagem</label>
            <input type="text" name="imagem" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Criar Curso</button>
        <a href="{{ route('perfil.index') }}" class="btn btn-secondary">Voltar</a>
    </form>
@endsection
