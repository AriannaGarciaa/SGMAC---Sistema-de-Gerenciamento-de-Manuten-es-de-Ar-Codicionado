@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Editar Equipamento</h2>
    <form action="{{ route('equipamentos.update', $equipamento->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nome" class="form-label">Nome do Equipamento</label>
            <input type="text" name="nome" id="nome" value="{{ $equipamento->nome }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea name="descricao" id="descricao" class="form-control" required>{{ $equipamento->descricao }}</textarea>
        </div>
        <div class="mb-3">
            <label for="local_id" class="form-label">Local</label>
            <select name="local_id" id="local_id" class="form-control">
                <option value="">Selecione um Local</option>
                @foreach($locais as $local)
                <option value="{{ $local->id }}" {{ $local->id == $equipamento->local_id ? 'selected' : '' }}>
                    {{ $local->nome }}
                </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success">Atualizar</button>
        <a href="{{ route('equipamentos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
