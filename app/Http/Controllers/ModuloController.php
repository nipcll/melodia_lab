<?php

namespace App\Http\Controllers;

use App\Models\Cursos;
use App\Models\Modulo;
use Illuminate\Http\Request;

class ModuloController extends Controller
{
    public function index($cursoId)
    {
        // Encontre o curso pelo ID
        $curso = Cursos::findOrFail($cursoId);

        // Obtenha os módulos do curso
        $modulos = $curso->modulos;

        // Retorne a view com o curso e os módulos
        return view('modulos.index', ['curso' => $curso, 'modulos' => $modulos]);
    }


    public function create($cursoId)
    {
        return view('modulos.create', compact('cursoId')); // Passando o ID do curso para a view de criação
    }


    public function store(Request $request, $cursoId)
    {
        $request->validate([
            'titulo' => 'required|string|max:100',
            'descricao' => 'nullable|string',
            'imagem' => 'nullable|string',
        ]);

        // Cria o módulo associado ao curso
        Modulo::create([
            'cursos_id' => $cursoId,
            'titulo' => $request->titulo,
            'descricao' => $request->descricao,
            'imagem' => $request->imagem,
        ]);

        return redirect()->route('modulos.index', $cursoId)->with('success', 'Módulo criado com sucesso.');
    }

    
    public function edit($id)
    {
        $modulo = Modulo::findOrFail($id);
        return view('modulos.edit', compact('modulo')); // Passa o módulo para a view de edição
    }

    
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

        return redirect()->route('modulos.index', $modulo->cursos_id)->with('success', 'Módulo atualizado com sucesso.');
    }

    
    public function destroy($id)
    {
        $modulo = Modulo::findOrFail($id);
        $cursoId = $modulo->cursos_id; // Guarda o ID do curso para redirecionar depois
        $modulo->delete(); // Remove o módulo

        return redirect()->route('modulos.index', $cursoId)->with('success', 'Módulo excluído com sucesso.');
    }
}
