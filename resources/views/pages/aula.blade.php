@extends('master')

@section('content')
    <h2>Aula</h2>
    <div><p>Essa é uma página de conteúdo da aula.</p>
    <p>O adm poderá acessar as suas respectivas aulas e as provas de cada uma.</p>
    </div>
    <div><a href="{{ route('prova') }}">Prova</a></div>
    <div><a href="{{ route('modulo') }}">Voltar</a></div>
@endsection