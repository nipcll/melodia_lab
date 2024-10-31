@extends('layouts.app')

@section('content')
    <h1>Criar Resposta</h1>

    <form action="{{ route('respostas.store', $perguntaId) }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="texto">Texto da Resposta</label>
            <input type="text" name="texto" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="correta">Correta?</label>
            <select name="correta" class="form-control" required>
                <option value="1">Sim</option>
                <option value="0">Não</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Criar Resposta
