@extends('layouts.app')

@section('content')
<div class="container mx-auto py-12">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Lista de Técnicos</h1>
        <a href="{{ route('tecnicos.create') }}" class="bg-green-500 text-white px-4 py-2 rounded">Adicionar Técnico</a>
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
            <th class="py-2 px-4 border">Nome</th>
            <th class="py-2 px-4 border">Empresa</th>
            <th class="py-2 px-4 border">Status</th>
            <th class="py-2 px-4">Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tecnicos as $tecnico)
            <tr>
                <td class="py-2 px-4 border">{{ $tecnico->id }}</td>
                <td class="py-2 px-4 border">{{ $tecnico->nome }}</td>
                <td class="py-2 px-4 border">{{ $tecnico->Empresa}}</td>
                <td class="py-2 px-4 border">{{ $tecnico->Status}}</td>
                <td class="py-2 px-4">
                    <a href="{{ route('tecnicos.show', $tecnico->id) }}" class="bg-blue-500 text-white px-2 py-1 rounded">Visualizar</a>
                    <a href="{{ route('tecnicos.edit', $tecnico->id) }}" class="bg-yellow-500 text-white px-2 py-1 rounded">Editar</a>
                    <form action="{{ route('tecnicos.destroy', $tecnico->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded">Excluir</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
