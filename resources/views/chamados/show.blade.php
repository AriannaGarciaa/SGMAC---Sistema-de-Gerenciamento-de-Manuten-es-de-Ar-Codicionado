@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalhes do Chamado</h1>
    <p><strong>ID:</strong> {{ $chamado->id }}</p>
    <p><strong>Local:</strong> {{ $chamado->Local }}</p>
    <p><strong>Nome:</strong>{{$chamado->NomePessoa}}</p>
    <p><strong>Descrição do Problema:</strong> {{ $chamado->DescricaoProblema }}</p>
    <p><strong>Solução:</strong>{{$chamado->solucao}}</p>
    <p><strong>Email:</strong>{{$chamado->email}}</p>
   
    <p><strong>Status:</strong> {{ $chamado->status }}</p>
    <a href="{{ route('chamados.index') }}" class="btn btn-secondary">Voltar</a>
</div>
@endsection
