<?php

namespace App\Http\Controllers;

use App\Models\Prova;
use Illuminate\Http\Request;

class ProvaController extends Controller
{
    public function index($aulaId)
    {
        $provas = Prova::where('aula_id', $aulaId)->get();
        return view('prova.index', compact('provas', 'aulaId'));
    }

    public function create($aulaId)
    {
        return view('prova.create', compact('aulaId'));
    }

    public function edit($id)
    {
        $prova = Prova::findOrFail($id);
        return view('prova.edit', compact('prova'));
    }

    public function store(Request $request, $aulaId)
    {
        $request->validate([
            'titulo' => 'required|string',
            'imagem' => 'nullable|string',
        ]);

        Prova::create([
            'aula_id' => $aulaId,
            'titulo' => $request->titulo,
            'imagem' => $request->imagem,
        ]);

        return redirect()->route('provas.index', $aulaId);
    }

    public function update(Request $request, $id)
    {
        $prova = Prova::findOrFail($id);

        $request->validate([
            'titulo' => 'required|string',
            'imagem' => 'nullable|string',
        ]);

        $prova->update($request->only(['titulo', 'imagem']));

        return redirect()->route('provas.index', $prova->aula_id);
    }
}
