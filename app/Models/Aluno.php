<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Represents a student (Aluno) in the system.
 */
class Aluno extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome',
        'data_nascimento',
        'gender',
        'turma_id',
    ];

     public function turma(): BelongsTo
    {
        return $this->belongsTo(Turma::class);
    } 
}
