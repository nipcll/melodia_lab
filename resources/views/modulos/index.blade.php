@extends('layouts.app')

@section('content')
    <h1>Módulos do Curso: {{ $curso->titulo }}</h1>

    @if ($modulos->isEmpty())
        <p>Este curso não possui módulos ainda.</p>
    @else
        @foreach ($modulos as $modulo)
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $modulo->titulo }}</h5>
                    <p class="card-text">{{ $modulo->descricao }}</p>
                    <a href="{{ route('aulas.index', $modulo->id) }}" class="btn btn-info">Ver Aulas</a>
                    <a href="{{ route('modulos.edit', $modulo->id) }}" class="btn btn-secondary">Editar Módulo</a>
                </div>
            </div>
        @endforeach
    @endif

    <a href="{{ route('modulos.create', $curso->id) }}" class="btn btn-primary mt-3">Criar Novo Módulo</a>
@endsection
