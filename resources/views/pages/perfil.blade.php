@extends('master')

@section('content')
    <h2>Perfil</h2>
    <div><p>Essa é a página do perfil do adm.</p>
    <p>O adm poderá editar suas informações pessoais, adicionar cursos ao catálogo, ver os cursos já disponíveis,
        editá-los e apagá-los.</p>
    </div>
    <div class="curso"><a href="{{ route('curso') }}">Curso 1</a></div>
@endsection