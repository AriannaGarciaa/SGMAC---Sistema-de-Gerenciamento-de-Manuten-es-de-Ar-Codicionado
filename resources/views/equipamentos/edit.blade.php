@extends('layouts.app')

@section('content')
<div class="container mx-auto py-12">
    <h2 class="text-2xl font-bold mb-6 text-center">Editar Equipamento</h2>

    <form method="POST" action="{{ route('equipamentos.update', $equipamento->id) }}"class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-lg">
        @csrf
        @method('PUT')
        
        <div class="mb-3">
            <label for="BTU" class="block text-gray-700 font-bold mb-2">BTU</label>
            <input type="text" name="BTU" id="BTU" class="form-control w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{$equipamento->BTU}}">
        </div>
        
        <div class="mb-3">
            <label for="Marca" class="block text-gray-700 font-bold mb-2">Marca</label>
            <input type="text" name="Marca" id="Marca" class="form-control w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{$equipamento->Marca}}" required>
        </div>
        
        <div class="mb-3">
            <label for="anoFabricacao" class="block text-gray-700 font-bold mb-2">Ano de Fabricação</label>
            <input type="number" name="anoFabricacao" id="anoFabricacao" class="form-control w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ $equipamento->anoFabricacao }}" required>
        </div>
        <div class="mb-3">
            <label for="dataInstalacao" class="block text-gray-700 font-bold mb-2">Data de Instalação</label>
            <input type="date" name="dataInstalacao" id="dataInstalacao" class="form-control w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{  $equipamento->dataInstalacao}}" required>
        </div>
        
        <div class="mb-3">
            <label for="status" class="block text-gray-700 font-bold mb-2">Status</label>
            <select name="status" id="status" class="form-control w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                <option value="Ativo" {{ old('status', $equipamento->status) == 'Ativo' ? 'selected' : '' }}>Ativo</option>
    <option value="Inativo" {{ old('status', $equipamento->status) == 'Inativo' ? 'selected' : '' }}>Inativo</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="Local_id" class="block text-gray-700 font-bold mb-2">Local</label>
            <select name="Local_id" id="Local_id" class="form-control w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                @foreach($local as $local)
                <option value="{{ $local->id }}" {{ old('Local_id', $equipamento->Local_id) == $local->id ? 'selected' : '' }}>
                    {{ $local->id }} - {{ $local->bloco }} - {{ $local->sala }}
                </option>
            @endforeach
            </select>
        </div>
            <div class="flex justify-between">
                <button type="submit" class="w-1/2 bg-green-900 text-white py-2 rounded-lg hover:bg-green-800 mr-2">Salvar</button>
                <a href="{{ route('equipamentos.index') }}" class="w-1/2 bg-red-900 text-white py-2 rounded-lg hover:bg-red-800 ml-2 text-center">Cancelar</a>
            </div>
        </form>
</div>
@endsection
