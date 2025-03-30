<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TecnicoManutencao;

class TecnicoManutencaoController extends Controller
{
    // Lista todos os registros
    public function index()
    {
        $tecnicos = TecnicoManutencao::all();
        return view('tecnicos.index', compact('tecnicoManutencoes'));
    }

    // Exibe o formulário de criação
    public function create()
    {
        return view('tecnicos.create');
    }

    // Salva um novo registro no banco de dados
    public function store(Request $request)
    {
        $data = $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:tecnico_manutencaos,email',
            'telefone' => 'nullable|string|max:20',
        ]);

        TecnicoManutencao::create($data);

        return redirect()->route('tecnicos.index')->with('success', 'Técnico criado com sucesso!');
    }

    // Exibe os detalhes de um registro específico
    public function show($id)
    {
        $tecnico = TecnicoManutencao::findOrFail($id);
        return view('tecnicos.show', compact('tecnico'));
    }

    // Exibe o formulário de edição
    public function edit($id)
    {
        $tecnico = TecnicoManutencao::findOrFail($id);
        return view('tecnicos.edit', compact('tecnico'));
    }

    // Atualiza um registro no banco de dados
    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:tecnico_manutencaos,email,' . $id,
            'telefone' => 'nullable|string|max:20',
        ]);

        $tecnico = TecnicoManutencao::findOrFail($id);
        $tecnico->update($request->all());

        return redirect()->route('tecnicos.show', $id)->with('success', 'Técnico atualizado com sucesso!');
    }

    // Exclui um registro do banco de dados
    public function destroy($id)
    {
        TecnicoManutencao::destroy($id);
        return redirect()->route('tecnicos.index')->with('success', 'Técnico deletado com sucesso!');
    }
}
