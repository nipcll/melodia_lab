@extends('master')

@section('content')
    <h2>Prova</h2>
    <div><p>Essa é uma página de prova.</p>
    <p>O adm poderá visualizar as perguntas e suas 3 alternativas, as falsas e a correta.</p>
    </div>
    <div><a href="{{ route('aula') }}">Voltar</a></div>
@endsection