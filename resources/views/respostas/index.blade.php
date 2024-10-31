@extends('layouts.app')

@section('content')
    <h1>Respostas da Pergunta</h1>
    
    @if($respostas->isEmpty())
        <p>Nenhuma resposta criada ainda.</p>
    @else
        @foreach($respostas as $resposta)
            <div>
                <h2>{{ $resposta->texto }} - {{ $resposta->correta ? 'Correta' : 'Incorreta' }}</h2>
                <a href="{{ route('respostas.edit', $resposta->id) }}" class="btn btn-warning">Editar Resposta</a>
            </div>
        @endforeach
    @endif

    <a href="{{ route('respostas.create', $perguntaId) }}" class="btn btn-success">Criar Nova Resposta</a>
@endsection
