<?php

namespace App\Http\Controllers;

use App\Models\Chamados;
use Illuminate\Http\Request;
use Iluminate\Support\Facades\DB;

class ChamadosController extends Controller
{
    // Exibe a lista de chamados
    public function index()
    {
        $chamados = Chamados::all();

        return view('chamados.index', compact('chamados', ));
    }

    // Exibe os detalhes de um chamado específico
    public function show($id)
    {
        $chamados = Chamados::findOrFail($id);
        return view('chamados.show', compact('chamados'));
    }

    // Exibe o formulário de criação
    public function create()
    {
        return view('chamados.create');
    }

    // Salva um novo chamado no banco de dados
    public function store(Request $request)
    {

        $chamado = new Chamados();
        $chamado->Local = $request->Local;
        $chamado->DescricaoProblema = $request->DescricaoProblema;
        $chamado->NomePessoa = $request->NomePessoa;
        $chamado->status = $request->status;
        $chamado->solucao = $request->solucao;
        $chamado->email = $request->email;

        $chamado->save();
        return redirect()->route('chamados.index')->with('success', 'Chamado criado com sucesso!');

    }

    // Exibe o formulário de edição
    public function edit($id)
    {
        $chamado = Chamados::findOrFail($id);
        return view('chamados.edit', compact('chamado'));
    }

    // Atualiza um chamado no banco de dados
    public function update(Request $request, $id)
    {
        $request->validate([
            'Local' => 'required|string',
            'DescricaoProblema' => 'required|string',
            'NomePessoa' => 'required|string',
            'status' => 'required|in:aberto,em andamento,finalizado',
            'solucao' => 'required|string',
            'email' => 'required|email',
        ]);

        $chamado = Chamados::findOrFail($id);
        $chamado->update($request->all());

        return redirect()->route('chamados.index')->with('success', 'Chamado atualizado com sucesso!');
    }

    // Exclui um chamado do banco de dados
    public function destroy($id)
    {
        Chamados::destroy($id);
        return redirect()->route('chamados.index')->with('success', 'Chamado deletado com sucesso!');
    }
}
