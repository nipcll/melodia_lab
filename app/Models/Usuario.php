<?php



namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{
    use Notifiable;

    protected $table = 'usuario'; // Define a tabela que será usada

    protected $fillable = [
        'nome',
        'email',
        'senha',
        'adm',
    ];

    protected $hidden = [
        'senha',
    ];
}

