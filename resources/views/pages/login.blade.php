@extends('master')

@section('content')
    <h2>Login</h2>
    <form action="{{ route('perfil') }}" method="post">
        <div>Email <input type="text"></div>
        <div>Senha <input type="text"></div>
        <div><button type="submit">Log In</button></div>
    </form>
@endsection