<?php

namespace App\Http\Controllers;
use App\Models\Cursos;
use Illuminate\Http\Request;

class CursosController extends Controller
{
    public function index()
    {
        $cursos = Cursos::all(); 

        return view('cursos.index', compact('cursos'));
    }

    public function show($id)
    {
        $curso = Cursos::findOrFail($id);
        $modulos = $curso->modulos; 

        return view('modulos.index', compact('curso', 'modulos'));
    }

    
    public function create()
    {
        return view('cursos.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:100',
            'descricao' => 'required|string',
            'recursos' => 'nullable|string',
            'objetivos' => 'nullable|string',
            'observacoes' => 'nullable|string',
            'imagem' => 'nullable|string',
        ]);

        
        Cursos::create($request->all());

        return redirect()->route('perfil.index'); 
    }

    
    public function edit($id)
    {
        $curso = Cursos::findOrFail($id); 
        return view('cursos.edit', compact('curso'));
    }

    
    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required|string|max:100',
            'descricao' => 'required|string',
            'recursos' => 'nullable|string',
            'objetivos' => 'nullable|string',
            'observacoes' => 'nullable|string',
            'imagem' => 'nullable|string',
        ]);

        $curso = Cursos::findOrFail($id); 
        $curso->update($request->all());

        return redirect()->route('perfil.index'); 
    }
}