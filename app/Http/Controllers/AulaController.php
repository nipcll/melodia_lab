<?php

namespace App\Http\Controllers;

use App\Models\Aula;
use App\Models\Modulo;
use Illuminate\Http\Request;

class AulaController extends Controller
{
    public function index($moduloId)
    {
        $aula = Aula::where('modulo_id', $moduloId)->get();
        return view('aulas.index', compact('aula', 'moduloId'));
    }

    public function create($moduloId)
    {
        return view('aulas.create', compact('moduloId'));
    }

    public function edit($id)
    {
        $aula = Aula::findOrFail($id);
        return view('aulas.edit', compact('aula'));
    }

    public function store(Request $request, $moduloId)
    {
        $request->validate([
            'descricao' => 'required|string',
            'conteudo' => 'required|string',
            'pdf' => 'nullable|string',
            'imagem' => 'nullable|string',
        ]);

        Aula::create([
            'modulo_id' => $moduloId,
            'descricao' => $request->descricao,
            'conteudo' => $request->conteudo,
            'pdf' => $request->pdf,
            'imagem' => $request->imagem,
        ]);

        return redirect()->route('aulas.index', $moduloId);
    }

    public function update(Request $request, $id)
    {
        $aula = Aula::findOrFail($id);

        $request->validate([
            'descricao' => 'required|string',
            'conteudo' => 'required|string',
            'pdf' => 'nullable|string',
            'imagem' => 'nullable|string',
        ]);

        $aula->update($request->only(['descricao', 'conteudo', 'pdf', 'imagem']));

        return redirect()->route('aulas.index', $aula->modulo_id);
    }
}
