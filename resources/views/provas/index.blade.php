@extends('layouts.app')

@section('content')
    <h1>Perguntas da Prova: {{ $prova->titulo }}</h1>

    @if ($perguntas->isEmpty())
        <p>Nenhuma pergunta criada para esta prova.</p>
    @else
        @foreach ($perguntas as $pergunta)
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $pergunta->texto }}</h5>
                    <a href="{{ route('perguntas.edit', $pergunta->id) }}" class="btn btn-secondary">Editar Pergunta</a>
                    <a href="{{ route('perguntas.index', $pergunta->id) }}" class="btn btn-info">Ver Respostas</a>
                </div>
            </div>
        @endforeach
    @endif

    <a href="{{ route('perguntas.create', $prova->id) }}" class="btn btn-primary mt-3">Criar Nova Pergunta</a>
@endsection
