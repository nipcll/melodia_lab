<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cursos extends Model
{
    public function modulos()
{
    return $this->hasMany(Modulo::class);
}

    use HasFactory;

    protected $table = 'curso';
    protected $fillable = [
        'titulo',
        'descricao',
        'recursos',
        'objetivos',
        'observacoes',
        'imagem',
    ];
}