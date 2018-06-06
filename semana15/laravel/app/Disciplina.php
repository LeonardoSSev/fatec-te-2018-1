<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    protected $fillable = ['nome'];

    public function matriculas()
    {
        return $this->hasMany('App\Matricula');
    }
}
