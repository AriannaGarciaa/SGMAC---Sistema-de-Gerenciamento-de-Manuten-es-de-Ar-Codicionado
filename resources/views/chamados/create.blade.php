@extends('layouts.app')

@section('content')
<div class="container mx-auto py-12">
    <h1 class="text-2xl font-bold mb-6 text-center">Criar Novo Chamado</h1>
    <form action="{{ route('chamados.store') }}" method="POST" class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-lg">
        @csrf
        <div class="mb-3">
            <label for="Local" class="form-label"> Local</label>
            <input type="text" name="Local" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Seu e-mail:</label>
            <input type="email" name="email" class="form-control" required>
        </div>
       

      

        <div class="mb-3">
            <label for="DescricaoProblema" class="form-label">Descrição do problema:</label>
            <textarea name="DescricaoProblema" class="form-control" rows="4" required></textarea>
        </div>
        <button type="submit" class="w-full bg-blue-900 text-white py-2 rounded-lg hover:bg-blue-800">Salvar</button>
    </form>
</div>
@endsection