@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Criar Nova Manutenção</h1>
    <form action="{{ route('manutencoes.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="problema" class="form-label">Problema</label>
            <textarea class="form-control" id="problema" name="problema" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-control" id="status" name="status" required>
                <option value="Aberta">Aberta</option>
                <option value="Em Andamento">Em Andamento</option>
                <option value="Concluída">Concluída</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Salvar</button>
    </form>
</div>
@endsection
