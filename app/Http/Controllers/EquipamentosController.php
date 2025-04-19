<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipamentos; 
use App\Models\Local;
use Illuminate\Support\Facades\DB;

class EquipamentosController extends Controller
{
    // Retorna a lista de equipamentos
    public function index()
    {
        $equipamentos = Equipamentos::all(); 
        $local = DB::table('local')->get();
        return view('equipamentos.index', compact('equipamentos', 'local'));
    }

    // Exibe o formulário de criação
    public function create()
    {
        $local = Local::all(); 
        return view('equipamentos.create', compact('local'));
    }

    // Salva um novo equipamento no banco de dados
    public function store(Request $request)
    {
        $equipamento = new Equipamentos();
        $equipamento->BTU = $request->BTU;
        $equipamento->Marca = $request->Marca;
        $equipamento->anoFabricacao = $request->anoFabricacao;
        $equipamento->dataInstalacao = $request->dataInstalacao;
        $equipamento->status = $request->status;
        $equipamento->Local_id = $request->Local_id;
        $equipamento->save();
        
        return redirect()->route('equipamentos.index')->with('success', 'Equipamento criado com sucesso!');
    }

    // Retorna um equipamento específico
    public function show($id)
    {
        $equipamento = Equipamentos::findOrFail($id);
        $local = Local::all(); // Adicionado para evitar erro com variável não definida
        return view('equipamentos.show', compact('equipamento', 'local'));
    }

    // Exibe formulário de edição
    public function edit($id)
    {
        $equipamento = Equipamentos::findOrFail($id);
        $local = DB::table('local')->get(); // Buscar os locais para edição
        return view('equipamentos.edit', compact('equipamento', 'local'));
    }

    // Atualiza um equipamento específico
    public function update(Request $request, $id)
    {
        $request->validate([
            'BTU' => 'required|string|max:255',
            'Marca' => 'required|string|max:255',
            'anoFabricacao' => 'required|integer',
            'dataInstalacao' => 'required|date',
            'status' => 'required|string|max:255',
            'Local_id' => 'required|integer',
        ]);

        $equipamento = Equipamentos::findOrFail($id);
        $equipamento->update($request->all());

        return redirect()->route('equipamentos.index')->with('success', 'Equipamento atualizado com sucesso!');
    }

    // Deleta um equipamento específico
    public function destroy($id)
    {
        Equipamentos::destroy($id);
        return redirect()->route('equipamentos.index')->with('success', 'Equipamento deletado com sucesso!');
    }
}
