<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AlunoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'nome_aluno' => $this->nome,
            'nascimento' => $this->data_nascimento,
            'genero' => $this->gender,
            'turma' => new TurmaResource($this->turma),
            'links' => [
                [
                'type' => 'GET',
                'url' => route('alunos.show', $this->id),
                'rel' => 'aluno_detalhes',
                ],
                [
                'type' => 'PUT',
                'url' => route('alunos.update', $this->id),
                'rel' => 'aluno_atualizar',
                ],
                [
                'type' => 'DELETE',
                'url' => route('alunos.destroy', $this->id),
                'rel' => 'aluno_deletar',
                ]
            ]
        ];
    }
}
