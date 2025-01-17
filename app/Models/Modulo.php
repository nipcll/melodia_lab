<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{
    public function cursos(): BelongsTo
    {
        return $this->belongsTo(Cursos::class);
    }

    public function aulas(): HasMany
    {
        return $this->hasMany(Aula::class);
    }

    use HasFactory;

    protected $table = 'modulo';

    protected $fillable = [
        'cursos_id',
        'titulo',
        'descricao',
        'imagem',
    ];
}

