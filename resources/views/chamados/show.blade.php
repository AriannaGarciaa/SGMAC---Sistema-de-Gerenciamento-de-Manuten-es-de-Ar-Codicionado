@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalhes do Chamado</h1>
    <p><strong>ID:</strong> {{ $chamado->id }}</p>
    <p><strong>Título:</strong> {{ $chamado->titulo }}</p>
    <p><strong>Descrição:</strong> {{ $chamado->descricao }}</p>
    <p><strong>Status:</strong> {{ $chamado->status }}</p>
    <a href="{{ route('chamados.index') }}" class="btn btn-secondary">Voltar</a>
</div>
@endsection
