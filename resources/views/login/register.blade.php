<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>
</head>
<body>
    <h1>Registrar</h1>
    <form action="{{ route('register.store') }}" method="POST">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha" required>
        <br>
        <label for="senha_confirmation">Confirmar Senha:</label>
        <input type="password" name="senha_confirmation" required>

        <button type="submit">Registrar</button>
    </form>
    <p><a href="{{ route('login') }}">Voltar ao Login</a></p>
</body>
</html>
