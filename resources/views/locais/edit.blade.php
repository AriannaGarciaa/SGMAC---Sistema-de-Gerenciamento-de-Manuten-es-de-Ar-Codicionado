@extends('layouts.app')

@section('content')
<div class="container mx-auto py-12">
    <h1 class="text-2xl font-bold mb-6 text-center">Editar Local</h1>
    <form method="POST" action="{{ route('locais.update', $local->id) }}" class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-lg">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="bloco" class="block text-gray-700 font-bold mb-2">Bloco</label>
            <input type="text" name="bloco" id="bloco" value="{{ $local->bloco }}" class="form-control w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>

        <div class="mb-3">
            <label for="sala" class="block text-gray-700 font-bold mb-2">Sala</label>
            <input type="text" name="sala" id="sala" value="{{ $local->sala }}" class="form-control w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>

        <div class="mb-3">
            <label for="tamanhoSala" class="block text-gray-700 font-bold mb-2">Tamanho da Sala</label>
            <input type="text" name="tamanhoSala" id="tamanhoSala" value="{{ $local->tamanhoSala }}" class="form-control w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="mb-3">
            <label for="status" class="block text-gray-700 font-bold mb-2">Status</label>
            <select name="status" id="status" class="form-control w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                <option value="Ativo" {{ $local->status == 'Ativo' ? 'selected' : '' }}>Ativo</option>
                <option value="Inativo" {{ $local->status == 'Inativo' ? 'selected' : '' }}>Inativo</option>
            </select>
        </div>

        <div class="flex justify-between">
            <button type="submit" class="w-1/2 bg-green-500 text-white py-2 rounded-lg hover:bg-green-400 mr-2">Atualizar</button>
            <a href="{{ route('locais.index') }}" class="w-1/2 bg-red-500 text-white py-2 rounded-lg hover:bg-red-400 ml-2 text-center">Cancelar</a>
        </div>
    </form>
</div>
@endsection