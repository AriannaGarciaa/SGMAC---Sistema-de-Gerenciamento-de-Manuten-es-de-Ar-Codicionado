@extends('layouts.app')

@section('content')
<div class="container mx-auto py-12">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Lista de Equipamentos</h1>
        <a href="{{ route('equipamentos.create') }}" class="bg-green-500 text-white px-4 py-2 rounded">Novo Equipamento</a>
    </div>
    
    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif

    <table class="min-w-full bg-white border border-gray-300">
        <thead class="bg-gray-200">
            <tr>
                <th class="py-2 px-4 border">ID</th>
                <th class="py-2 px-4 border">BTU</th>
                <th class="py-2 px-4 border">Marca</th>
                <th class="py-2 px-4 border">Ano de Fabricação</th>
                <th class="py-2 px-4 border">Data de Instalação</th>
                <th class="py-2 px-4 border">Status</th>
                <th class="py-2 px-4 border">Local</th>
                <th class="py-2 px-4">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($equipamentos as $equipamento)
            <tr>
                <td class="py-2 px-4 border">{{ $equipamento->id }}</td>
                <td class="py-2 px-4 border">{{ $equipamento->BTU }}</td>
                <td class="py-2 px-4 border">{{ $equipamento->Marca }}</td>
                <td class="py-2 px-4 border">{{ $equipamento->anoFabricacao }}</td>
                <td class="py-2 px-4 border">{{ $equipamento->dataInstalacao }}</td>
                <td class="py-2 px-4 border">{{ $equipamento->status }}</td>
                <td class="py-2 px-4 border">{{ $equipamento->local->bloco ?? 'N/A' }} - {{ $equipamento->local->sala ?? 'N/A' }}</td>
                <td class="py-2 px-4">
                    <a href="{{ route('equipamentos.show', $equipamento->id) }}" class="bg-blue-500 text-white px-2 py-1 rounded">Visualizar</a>
                    <a href="{{ route('equipamentos.edit', $equipamento->id) }}" class="bg-yellow-500 text-white px-2 py-1 rounded">Editar</a>
                    <form action="{{ route('equipamentos.destroy', $equipamento->id) }}" method="POST" style="display:inline;">
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