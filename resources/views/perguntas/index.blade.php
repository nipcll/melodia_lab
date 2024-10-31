@extends('layouts.app')

@section('content')
    <h1>Respostas da Pergunta: {{ $pergunta->texto }}</h1>

    @if ($respostas->isEmpty())
        <p>Nenhuma resposta criada para esta pergunta.</p>
    @else
        @foreach ($respostas as $resposta)
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $resposta->texto }}</h5>
                    <a href="{{ route('respostas.edit', $resposta->id) }}" class="btn btn-secondary">Editar Resposta</a>
                </div>
            </div>
        @endforeach
    @endif

    <a href="{{ route('respostas.create', $pergunta->id) }}" class="btn btn-primary mt-3">Criar Nova Resposta</a>
@endsection
