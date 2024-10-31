@extends('layouts.app')

@section('content')
    <h1>Meus Cursos</h1>

    @if ($cursos->isEmpty())
        <p>Você ainda não criou nenhum curso.</p>
    @else
        @foreach ($cursos as $curso)
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $curso->titulo }}</h5>
                    <p class="card-text">{{ $curso->descricao }}</p>
                    <a href="{{ route('cursos.index', $curso->id) }}" class="btn btn-info">Ver Módulos</a>
                    <a href="{{ route('cursos.edit', $curso->id) }}" class="btn btn-secondary">Editar Curso</a>
                </div>
            </div>
        @endforeach
    @endif

    <a href="{{ route('cursos.create') }}" class="btn btn-primary mt-3">Criar Novo Curso</a>
@endsection
