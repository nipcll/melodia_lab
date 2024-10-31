<?php
namespace App\Http\Controllers;

use App\Models\Resposta;
use Illuminate\Http\Request;

class RespostaController extends Controller
{
    public function index($perguntaId)
    {
        $respostas = Resposta::where('pergunta_id', $perguntaId)->get();
        return view('resposta.index', compact('respostas', 'perguntaId'));
    }

    public function create($perguntaId)
    {
        return view('resposta.create', compact('perguntaId'));
    }

    public function edit($id)
    {
        $resposta = Resposta::findOrFail($id);
        return view('resposta.edit', compact('resposta'));
    }

    public function store(Request $request, $perguntaId)
    {
        $request->validate([
            'texto' => 'required|string',
            'correta' => 'required|boolean',
        ]);

        Resposta::create([
            'pergunta_id' => $perguntaId,
            'texto' => $request->texto,
            'correta' => $request->correta,
        ]);

        return redirect()->route('respostas.index', $perguntaId);
    }

    public function update(Request $request, $id)
    {
        $resposta = Resposta::findOrFail($id);

        $request->validate([
            'texto' => 'required|string',
            'correta' => 'required|boolean',
        ]);

        $resposta->update($request->only(['texto', 'correta']));

        return redirect()->route('respostas.index', $resposta->pergunta_id);
    }
}
