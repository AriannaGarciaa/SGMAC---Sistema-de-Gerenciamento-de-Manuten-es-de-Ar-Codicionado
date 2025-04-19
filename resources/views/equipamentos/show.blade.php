@extends('layouts.app')

@section('content')
<div class="container mx-auto py-12">
    <h1 class="text-2xl font-bold mb-6 text-center">Detalhes do Equipamento</h1>
    <div class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-lg">
        <p class="mb-3"><strong>ID:</strong> {{ $equipamento->id }}</p>
        <p class="mb-3"><strong>BTU:</strong> {{ $equipamento->BTU }}</p>
        <p class="mb-3"><strong>Marca:</strong> {{ $equipamento->Marca }}</p>
        <p class="mb-3"><strong>Ano de Fabricação:</strong> {{ $equipamento->anoFabricacao }}</p>
        <p class="mb-3"><strong>Data de Instalação:</strong> {{ $equipamento->dataInstalacao }}</p>
        <p class="mb-3"><strong>Status:</strong> {{ $equipamento->status }}</p>
        <div class="flex justify-between mt-6">
            <a href="{{ route('equipamentos.index') }}" class="w-1/2 bg-gray-500 text-white py-2 rounded-lg hover:bg-gray-400 mr-2 text-center">Voltar</a>
            <a href="{{ route('equipamentos.edit', $equipamento->id) }}" class="w-1/2 bg-yellow-500 text-white py-2 rounded-lg hover:bg-yellow-400 ml-2 text-center">Editar</a>
        </div>
        <form action="{{ route('equipamentos.destroy', $equipamento->id) }}" method="POST" class="mt-4">
            @csrf
            @method('DELETE')
            <button type="submit" class="w-full bg-red-500 text-white py-2 rounded-lg hover:bg-red-400 text-center" onclick="return confirm('Tem certeza que deseja excluir este equipamento?')">Excluir</button>
        </form>
    </div>
</div>
@endsection