<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artigo extends Model
{
    protected $fillable = [
        'user_id', 'categoria_id', 'conteudo'
    ];

    public function usuario()
    {
        return $this->belongsTo(\App\User::class);
    }

    public function categoria()
    {
        return $this->belongsTo(\App\Categoria::class);
    }

}
