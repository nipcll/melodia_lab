<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    public function modulo(): BelongsTo
    {
        return $this->belongsTo(Modulo::class);
    }

    use HasFactory;

    protected $table = 'aula';

    protected $fillable = [
        'modulo_id',
        'titulo',
        'descricao',
        'conteudo',
        'pdf',
        'imagem',
    ];
}
