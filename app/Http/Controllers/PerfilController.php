<?php

namespace App\Http\Controllers;

use App\Models\Cursos; 
use Illuminate\Support\Facades\Auth;

class PerfilController extends Controller
{
   
    public function index()
    {
        $usuario = Auth::user();
        $cursos = Cursos::all(); 

        return view('perfil.index', compact('usuario', 'cursos')); 
    }
}
