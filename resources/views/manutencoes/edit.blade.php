@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Editar Manutenção</h2>
    <form action="{{ route('manutencoes.update', $manutencao->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="tecnico" class="form-label">Técnico Responsável</label>
            <select name="tecnico_manutencao_idTecnicoManutencao" id="tecnico" class="form-control">
                <option value="">Selecione um técnico</option>
                @foreach($tecnicos as $tecnico)
                <option value="{{ $tecnico->id }}" {{ $manutencao->tecnico_manutencao_idTecnicoManutencao == $tecnico->id ? 'selected' : '' }}>
                    {{ $tecnico->nome }}
                </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="Problema" class="form-label">Descrição do Problema</label>
            <textarea name="Problema" id="Problema" class="form-control" required>{{ $manutencao->Problema }}</textarea>
        </div>
        <div class="mb-3">
            <label for="Status" class="form-label">Status</label>
            <select name="Status" id="Status" class="form-control" required>
                <option value="Aberto" {{ $manutencao->Status == 'Aberto' ? 'selected' : '' }}>Aberto</option>
                <option value="Em Andamento" {{ $manutencao->Status == 'Em Andamento' ? 'selected' : '' }}>Em Andamento</option>
                <option value="Concluído" {{ $manutencao->Status == 'Concluído' ? 'selected' : '' }}>Concluído</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Atualizar</button>
        <a href="{{ route('manutencoes.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
