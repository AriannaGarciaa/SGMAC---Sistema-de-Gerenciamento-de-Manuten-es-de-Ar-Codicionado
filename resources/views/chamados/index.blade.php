@extends('layouts.app')

@section('content')
<div class="container mx-auto py-12">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Lista de Chamados Externos</h1>
        <a href="{{ route('chamados.create') }}" class="bg-green-500 text-white px-4 py-2 rounded">Cadastrar Novo Chamado</a>
    </div>
    
    
    <table class="min-w-full bg-white border border-gray-300">
        <thead class="bg-gray-200">
            <tr>
                <th class="py-2 px-4 border">ID</th>
                <th class="py-2 px-4 border">Local</th>
                <th class="py-2 px-4 border">Descrição do Problema</th>
                <th class="py-2 px-4 border">Nome</th>
                <th class="py-2 px-4 border">Solução</th>
                <th class="py-2 px-4 border">Email</th>
                <th class="py-2 px-4 border">Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($chamados as $chamado)
                <tr class="border">
                    <td class="py-2 px-4">{{ $chamados->id }}</td>
                    <td class="py-2 px-4">{{ $chamados->Local }}</td>
                    <td class="py-2 px-4">{{ $chamados->DescricaoProblema }}</td>
                    <td class="py-2 px-4">{{ $chamados->NomePessoa }}</td>
                    <td class="py-2 px-4">{{ $chamados->solucao }}</td>
                    <td class="py-2 px-4">{{ $chamados->email }}</td>
                    <td class="py-2 px-4">{{ $chamados->status }}</td>
                    <td class="py-2 px-4">
                        
                    </td>
                    <td class="py-2 px-4 flex space-x-2">
                        <a href="{{ route('chamados.edit', $chamado->id) }}" class="bg-yellow-500 text-white px-2 py-1 rounded">Editar</a>
                        <form action="{{ route('chamados.destroy', $chamado->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir este chamado?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
