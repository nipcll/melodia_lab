<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resposta extends Model
{
    use HasFactory;

    protected $table = 'resposta';

    protected $fillable = [
        'pergunta_id',
        'correta',
        'texto',
    ];
}
