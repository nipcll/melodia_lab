@extends('master')

@section('content')
    <h2>Curso</h2>
    <div><p>Essa é uma página de conteúdo do curso.</p>
    <p>O adm poderá acessar seus módulos, as suas respectivas aulas e as provas de cada uma.</p>
    </div>
    <div><a href="{{ route('modulo') }}">Módulo 1</a></div>
    <div><a href="{{ route('perfil') }}">Voltar</a></div>
@endsection