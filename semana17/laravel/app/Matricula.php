<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    protected $fillable = ['aluno_id', 'disciplina_id'];

    public function aluno()
    {
        return $this->belongsTo('App\Aluno');
    }

    public function disciplina()
    {
        return $this->belongsTo('App\Disciplina');
    }
}
