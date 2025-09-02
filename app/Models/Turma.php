<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Turma extends Model
{
    /**
     * Define a relação entre Turma e Aluno.
     * @return \Illuminate\Database\Eloquent\Relations\HasMany<Aluno, Turma>
     */
    public function alunos(): HasMany
    {
        return $this->hasMany(Aluno::class);
    }
}
