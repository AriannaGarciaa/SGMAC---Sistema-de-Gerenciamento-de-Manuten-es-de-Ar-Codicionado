@extends('layouts.app')

@section('content')
<div class="container mx-auto py-12">
    <h1 class="text-2xl font-bold mb-6 text-center">Detalhes do Local</h1>
    <div class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-lg">
        <p class="mb-3"><strong>ID:</strong> {{ $local->id }}</p>
        <p class="mb-3"><strong>Bloco:</strong> {{ $local->bloco }}</p>
        <p class="mb-3"><strong>Sala:</strong> {{ $local->sala }}</p>
        <p class="mb-3"><strong>Tamanho da Sala:</strong> {{ $local->tamanhoSala }}</p>
        <p class="mb-3"><strong>Status:</strong> {{ $local->status }}</p>
        <div class="flex justify-between mt-6">
            <a href="{{ route('locais.index') }}" class="w-1/2 bg-gray-500 text-white py-2 rounded-lg hover:bg-gray-400 mr-2 text-center">Voltar</a>
            <a href="{{ route('locais.edit', $local->id) }}" class="w-1/2 bg-yellow-500 text-white py-2 rounded-lg hover:bg-yellow-400 ml-2 text-center">Editar</a>
        </div>
    </div>
</div>
@endsection
