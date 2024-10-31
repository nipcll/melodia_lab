<?php
namespace App\Http\Controllers;

use App\Models\Pergunta;
use Illuminate\Http\Request;

class PerguntaController extends Controller
{
    public function index($provaId)
    {
        $perguntas = Pergunta::where('prova_id', $provaId)->get();
        return view('pergunta.index', compact('perguntas', 'provaId'));
    }

    public function create($provaId)
    {
        return view('pergunta.create', compact('provaId'));
    }

    public function edit($id)
    {
        $pergunta = Pergunta::findOrFail($id);
        return view('pergunta.edit', compact('pergunta'));
    }

    public function store(Request $request, $provaId)
    {
        $request->validate([
            'texto' => 'required|string',
        ]);

        Pergunta::create([
            'prova_id' => $provaId,
            'texto' => $request->texto,
        ]);

        return redirect()->route('perguntas.index', $provaId);
    }

    public function update(Request $request, $id)
    {
        $pergunta = Pergunta::findOrFail($id);

        $request->validate([
            'texto' => 'required|string',
        ]);

        $pergunta->update($request->only(['texto']));

        return redirect()->route('perguntas.index', $pergunta->prova_id);
    }
}
