@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Lista de Manutenções</h2>
    <a href="{{ route('manutencoes.create') }}" class="btn btn-primary mb-3">Adicionar Manutenção</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Técnico Responsável</th>
                <th>Problema</th>
                <th>Status</th>
                <th>Data de Abertura</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($manutencoes as $manutencao)
            <tr>
                <td>{{ $manutencao->id }}</td>
                <td>{{ $manutencao->tecnicoManutencao->nome ?? 'Não definido' }}</td>
                <td>{{ $manutencao->Problema }}</td>
                <td>{{ $manutencao->Status }}</td>
                <td>{{ $manutencao->DataAbertura }}</td>
                <td>
                    <a href="{{ route('manutencoes.show', $manutencao->id) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('manutencoes.edit', $manutencao->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('manutencoes.destroy', $manutencao->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
