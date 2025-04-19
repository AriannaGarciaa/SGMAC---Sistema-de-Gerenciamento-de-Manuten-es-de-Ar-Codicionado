<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Chamado de Manutenção</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    
<body>
    <div class="container">
        <h1>CHAMADO REALIZADO COM SUCESSO !!</h1>

        <h2>Detalhes do Chamado</h2>
        
        <p><strong>Id:</strong>{{$chamado->id}}</p>
        <p><strong>Local:</strong> {{ $chamado->Local }}</p>
        <p><strong>Nome:</strong>{{$chamado->NomePessoa}}</p>
        <p><strong>Descrição do Problema:</strong> {{ $chamado->DescricaoProblema }}</p>
        <p><strong>Email:</strong>{{$chamado->email}}</p>

        <a href="{{ route('chamadosExternos.create') }}" class="btn btn-secondary">Voltar</a>

    </div>
