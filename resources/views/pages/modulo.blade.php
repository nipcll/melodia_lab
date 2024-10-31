@extends('master')

@section('content')
    <h2>Modúlo</h2>
    <div><p>Essa é uma página de conteúdo do módulo.</p>
    <p>O adm poderá acessar as suas respectivas aulas e as provas de cada uma.</p>
    </div>
    <div><a href="{{ route('aula') }}">Aula 1</a></div>
    <div><a href="{{ route('curso') }}">Voltar</a></div>
@endsection