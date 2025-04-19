<?php

namespace App\Http\Controllers;

use App\Models\Local;
use Illuminate\Http\Request;
use Iluminate\Support\Facades\DB;


class LocalController extends Controller
{
    // Exibe a lista de locais
    public function index()
    {
        $local = Local::all();
        return view('locais.index', compact('local'));
    }
    // Exibe o formulário de criação
    public function create()
    {
        return view('locais.create');
    }

    // Salva um novo local no banco de dados
    public function store(Request $request)
    {
        

        $local = new Local();
        $local->bloco = $request->bloco;
        $local->sala = $request->sala;
        $local->tamanhoSala = $request->tamanhoSala;
        $local->status = $request->status;
        $local->save();

        return redirect()->route('locais.index')->with('success', 'Local criado com sucesso!');
    }
    // Exibe os detalhes de um local específico
    public function show($id)
    {
        $local = Local::findOrFail($id);
        return view('locais.show', compact('local'));
    }


    

    // Exibe o formulário de edição
    public function edit($id)
    {
        $local = Local::findOrFail($id);
        return view('locais.edit', compact('local'));
    }

    // Atualiza um local no banco de dados
    public function update(Request $request, $id)
    {
        $request->validate([
            'bloco' => 'required|string|max:255',
            'sala' => 'required|string|max:255',
            'tamanhoSala' => 'nullable|string|max:255',
            'status' => 'required|string|in:Ativo,Inativo',
        ]);

        $local = Local::findOrFail($id);
        $local->update($request->all());

        return redirect()->route('locais.index', $local->id)->with('success', 'Local atualizado com sucesso!');    }

    // Exclui um local do banco de dados
    public function destroy($id)
    {
        Local::destroy($id);
        return redirect()->route('locais.index')->with('success', 'Local deletado com sucesso!');
    }
}
