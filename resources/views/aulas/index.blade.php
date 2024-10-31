@extends('layouts.app')

@section('content')
    <h1>Provas da Aula: {{ $aula->titulo }}</h1>

    @if ($provas->isEmpty())
        <p>Nenhuma prova criada para esta aula.</p>
    @else
        @foreach ($provas as $prova)
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $prova->titulo }}</h5>
                    <a href="{{ route('provas.edit', $prova->id) }}" class="btn btn-secondary">Editar Prova</a>
                    <a href="{{ route('provas.index', $prova->id) }}" class="btn btn-info">Ver Perguntas</a>
                </div>
            </div>
        @endforeach
    @endif

    <a href="{{ route('provas.create', $aula->id) }}" class="btn btn-primary mt-3">Criar Nova Prova</a>
@endsection
