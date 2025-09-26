<?php

namespace App\Http\Controllers;

use App\Models\Medico;
use Illuminate\Http\Request;

class MedicoController extends Controller
{

    public function store(Request $request)
    {
        $medicos = Medico::create([
            'nome_completo' => $request->nome_completo,
            'especialidade' => $request->especialidade,
            'crm' => $request->crm,
            'data_nascimento' => $request->data_nascimento,
            'cpf' => $request->cpf,
            'email' => $request->email,
            'telefone' => $request->telefone,
            'horarios_consulta' => $request->horarios_consulta
        ]);

        return response()->json($medicos);
    }

    public function index()
    {
        $medico = Medico::all();
        return response()->json($medico);
    }

    public function show($id)
    {
        $medico = Medico::find($id);

        if (!$medico) {
            return response()->json(['Médico não encontrado']);
        }

        return response()->json($medico);
    }

    public function update(Request $request, $id)
    {
        $medico = Medico::find($id);

        if (!$medico) {
            return response()->json(['Médico não encontrado']);
        }

        if (isset($request->nome_completo)) {
            $medico->nome_completo = $request->nome_completo;
        }

        if (isset($request->especialidade)) {
            $medico->especialidade = $request->especialidade;
        }

        if (isset($request->crm)) {
            $medico->crm = $request->crm;
        }

        if (isset($request->data_nascimento)) {
            $medico->data_nascimento = $request->data_nascimento;
        }

        if (isset($request->cpf)) {
            $medico->cpf = $request->cpf;
        }

        if (isset($request->email)) {
            $medico->email = $request->email;
        }

        if (isset($request->telefone)) {
            $medico->telefone = $request->telefone;
        }

        if (isset($request->horarios_consulta)) {
            $medico->horarios_consulta = $request->horarios_consulta;
        }

        $medico->update();

        return response()->json($medico);
    }

    public function delete($id)
    {
        $medico = Medico::find($id);

        if (!$medico) {
            return response()->json(['Médico não encontrado']);
        }

        $medico->delete();

        return response()->json(['Médico deletado com successo']);
    }

    public function medico_especialidade(Request $request)
    {
        $medicos = Medico::where('especialiade', $request->especialidade)->get();

        return response()->json($medicos);
    }

    public function medico_cpf(Request $request)
    {
        $medicos = Medico::where('cpf', $request->cpf)->get();

        return response()->json($medicos);
    }

}
