<?php

namespace App\Http\Controllers;

use App\Models\Cursos; // Certifique-se de que o modelo Cursos está importado
use App\Models\Modulo; // Importando o modelo Modulo
use Illuminate\Http\Request;

class ModuloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($cursoId)
    {
        // Encontre o curso pelo ID
        $curso = Cursos::findOrFail($cursoId);
        
        // Obtenha os módulos do curso
        $modulos = $curso->modulos; // Certifique-se de que o relacionamento 'modulos' está definido no model Cursos

        // Retorne a view com o curso e os módulos
        return view('modulos.index', compact('curso', 'modulos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($cursoId)
    {
        return view('modulos.create', compact('cursoId')); // Passando o ID do curso para a view de criação
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $cursoId)
    {
        $request->validate([
            'titulo' => 'required|string|max:100',
            'descricao' => 'nullable|string',
            'imagem' => 'nullable|string',
        ]);

        // Cria o módulo associado ao curso
        Modulo::create([
            'curso_id' => $cursoId,
            'titulo' => $request->titulo,
            'descricao' => $request->descricao,
            'imagem' => $request->imagem,
        ]);

        return redirect()->route('modulos.index', $cursoId)->with('success', 'Módulo criado com sucesso.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $modulo = Modulo::findOrFail($id);
        return view('modulos.edit', compact('modulo')); // Passa o módulo para a view de edição
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $modulo = Modulo::findOrFail($id);

        $request->validate([
            'titulo' => 'required|string|max:100',
            'descricao' => 'nullable|string',
            'imagem' => 'nullable|string',
        ]);

        // Atualiza o módulo
        $modulo->update($request->only(['titulo', 'descricao', 'imagem']));

        return redirect()->route('modulos.index', $modulo->curso_id)->with('success', 'Módulo atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $modulo = Modulo::findOrFail($id);
        $cursoId = $modulo->curso_id; // Guarda o ID do curso para redirecionar depois

        $modulo->delete(); // Remove o módulo

        return redirect()->route('modulos.index', $cursoId)->with('success', 'Módulo excluído com sucesso.');
    }
}
