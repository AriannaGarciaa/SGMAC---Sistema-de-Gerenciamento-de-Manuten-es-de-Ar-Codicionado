<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TecnicoManutencao;
use Illuminate\Support\Facades\DB;

class TecnicoManutencaoController extends Controller
{
    // Lista todos os registros
    public function index()
    {
        $tecnicos = TecnicoManutencao::all(); 
        return view('tecnicos.index', compact('tecnicos'));
    }
    // Exibe o formulário de criação

    public function create()
    {
        return view('tecnicos.create');
    }
    // salva um novo tecnico no banco
    public function store(Request $request)
    {
        $tecnicos = new TecnicoManutencao();
        $tecnicos->nome = $request->nome;
        $tecnicos->empresa = $request->empresa;
        $tecnicos->status = $request->status;
        $tecnicos->save();

        return redirect()->route('tecnicos.index')->with('success', 'Técnico cadastrado com com sucesso!');
    }

    // Exibe os detalhes de um registro específico

    public function show($id)
    {
        $tecnicos = TecnicoManutencao::findOrFail($id);
        return view('tecnicos.show', compact('tecnicos'));
    }

    // Exibe o formulário de edição
    public function edit($id)
    {
        $tecnicos = TecnicoManutencao::findOrFail($id);
        return view('tecnicos.edit', compact('tecnicos'));
    }
    // Atualiza um registro no banco de dados

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'empresa' => 'required|string|max:255',
            'status' => 'nullable|string|max:255',
        ]);

        $tecnicos = TecnicoManutencao::findOrFail($id);
        $tecnicos->update($request->all());
    
    
        return redirect()->route('tecnicos.index')->with('success', 'Técnico atualizado com sucesso!');
    }
    // Remove um registro do banco de dados

    public function destroy($id)
    {
       
        TecnicoManutencao::destroy($id);
        return redirect()->route('tecnicos.index')->with('success', 'Técnico removido com sucesso!');
    }
}