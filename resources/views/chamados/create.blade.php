@extends('layouts.app')

@section('content')
<div class="container mx-auto py-12">
    <h1 class="text-2xl font-bold mb-6 text-center">Criar Novo Chamado</h1>
    <form action="{{ route('chamados.store') }}" method="POST" class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-lg">
        @csrf
        <div class="mb-4">
            <label for="titulo" class="block text-gray-700 font-bold mb-2">Título</label>
            <input type="text" class="form-control w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" id="titulo" name="titulo" required>
        </div>
        <div class="mb-4">
            <label for="descricao" class="block text-gray-700 font-bold mb-2">Descrição</label>
            <textarea class="form-control w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" id="descricao" name="descricao" rows="3" required></textarea>
        </div>
        <div class="mb-4">
            <label for="bloco" class="block text-gray-700 font-bold mb-2">Bloco</label>
            <input type="text" class="form-control w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" id="bloco" name="bloco" required>
        </div>
        <div class="mb-4">
            <label for="sala" class="block text-gray-700 font-bold mb-2">Sala</label>
            <input type="text" class="form-control w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" id="sala" name="sala" required>
        </div>
        <div class="mb-4">
            <label for="tamanho" class="block text-gray-700 font-bold mb-2">Tamanho</label>
            <input type="text" class="form-control w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" id="tamanho" name="tamanho" required>
        </div>
        <div class="mb-4">
            <label for="status" class="block text-gray-700 font-bold mb-2">Status</label>
            <select class="form-control w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" id="status" name="status" required>
                <option value="agendado">Agendado</option>
                <option value="confirmado">Confirmado</option>
                <option value="concluido">Concluído</option>
            </select>
        </div>
        <button type="submit" class="w-full bg-blue-900 text-white py-2 rounded-lg hover:bg-blue-800">Salvar</button>
    </form>
</div>
@endsection