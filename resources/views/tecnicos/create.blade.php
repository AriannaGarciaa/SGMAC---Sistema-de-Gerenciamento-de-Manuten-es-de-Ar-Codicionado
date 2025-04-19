@extends('layouts.app')

@section('content')
<div class="container mx-auto py-12">
    <h1 class="text-2xl font-bold mb-6 text-center">Cadastrar Técnico</h1>
    <form action="{{ route('tecnicos.store') }}" method="POST" class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-lg">
        @csrf
        <div class="mb-3">
            <label for="nome" class="block text-gray-700 font-bold mb-2">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>
        <div class="mb-3">
            <label for="empresa" class="block text-gray-700 font-bold mb-2">Empresa</label>
            <input type="empresa" name="empresa" id="empresa" class="form-control w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"  required>
        </div>
        <div class="mb-3">
            <label for="status" class="block text-gray-700 font-bold mb-2">Status</label>
            <select name="status" id="status" class="form-control w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                <option value="ativo">Ativo</option>
                <option value="inativo">Inativo</option>
            </select>
        </div>
        <div class="flex justify-between">
            <button type="submit" class="w-1/2 bg-green-900 text-white py-2 rounded-lg hover:bg-green-800 mr-2">Salvar</button>
            <a href="{{ route('tecnicos.index') }}" class="w-1/2 bg-red-900 text-white py-2 rounded-lg hover:bg-red-800 ml-2 text-center">Cancelar</a>
        </div>
    </form>
</div>
@endsection