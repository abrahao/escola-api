<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Response;
use App\Http\Requests\AlunoRequest;
use Illuminate\Database\Eloquent\Collection;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Collection
    {
        return Aluno::get();
    }

    /**
     * Store a newly created resource in storage.
     * @param AlunoRequest $request
     * @return Response
     */
    public function store(AlunoRequest $request)
    {
        $aluno = Aluno::create($request->all());
        return response(['status' => 'success', 'data' => $aluno], 201, []);
    }

    /**
     * Display the specified resource.
     */
    public function show(Aluno $aluno): Aluno
    {
        return $aluno;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AlunoRequest $request, Aluno $aluno)
    {

        $aluno->update($request->all());

        return $aluno;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Aluno $aluno)
    {
        $aluno->delete();
        return ['status' => 'success', 'message' => 'Aluno deletado com sucesso!'];
    }
}
