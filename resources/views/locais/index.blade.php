@extends('layouts.app')

@section('content')
<div class="container mx-auto py-12">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Locais</h1>
        <a href="{{ route('locais.create') }}" class="bg-green-500 text-white px-4 py-2 rounded">Novo Local</a>
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
                <th class="py-2 px-4 border">Bloco</th>
                <th class="py-2 px-4 border">Sala</th>
                <th class="py-2 px-4 border">Tamanho da Sala</th>
                <th class="py-2 px-4 border">Status</th>
                <th class="py-2 px-4">Ações</th> 
            </tr>
        </thead>
        <tbody>
            @forelse ($local as $local)
                <tr>
                    <td class="py-2 px-4 border">{{ $local->id }}</td>
                    <td class="py-2 px-4 border">{{ $local->bloco }}</td>
                    <td class="py-2 px-4 border">{{ $local->sala }}</td>
                    <td class="py-2 px-4 border">{{ $local->tamanhoSala }}</td>
                    <td class="py-2 px-4 border">{{ $local->status }}</td>
                    <td class="py-2 px-4"> 
                        <a href="{{ route('locais.show', $local->id) }}" class="bg-blue-500 text-white px-2 py-1 rounded">Visualizar</a>
                        <a href="{{ route('locais.edit', $local->id) }}" class="bg-yellow-500 text-white px-2 py-1 rounded">Editar</a>
                        <form action="{{ route('locais.destroy', $local->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded">Excluir</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center py-2">Nenhum local cadastrado</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection