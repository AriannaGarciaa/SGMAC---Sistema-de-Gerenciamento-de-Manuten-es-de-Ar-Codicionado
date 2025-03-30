@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detalhes da Manutenção</h2>
    <p><strong>ID:</strong> {{ $manutencao->id }}</p>
    <p><strong>Técnico Responsável:</strong> {{ $manutencao->tecnicoManutencao->nome ?? 'Não definido' }}</p>
    <p><strong>Problema:</strong> {{ $manutencao->Problema }}</p>
    <p><strong>Solução:</strong> {{ $manutencao->Solucao }}</p>
    <p><strong>Status:</strong> {{ $manutencao->Status }}</p>
    <p><strong>Data de Abertura:</strong> {{ $manutencao->DataAbertura }}</p>
    <p><strong>Última Atualização:</strong> {{ $manutencao->DataUltimaAtualizacao }}</p>
    <a href="{{ route('manutencoes.index') }}" class="btn btn-secondary">Voltar</a>
    <a href="{{ route('manutencoes.edit', $manutencao->id) }}" class="btn btn-warning">Editar</a>
</div>
@endsection
