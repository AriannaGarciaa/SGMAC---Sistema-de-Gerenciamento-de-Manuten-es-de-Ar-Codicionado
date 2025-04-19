<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Chamado de Manutenção</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    
<body>
<div class="container mx-auto py-12">
    <h2 class="text-2xl font-bold mb-6 text-center">Abrir Chamado de Manutenção de Ar Condicionado</h2>
    <form method="POST" action="{{ route('chamadosExternos.store') }}">
        @csrf

        <div class="mb-3">
            <label for="NomePessoa" class="block text-gray-700 font-bold mb-2">Seu nome:</label>
            <input type="text" name="NomePessoa" id="NomePessoa"class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Seu e-mail:</label>
            <input type="email" name="email"class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>

        <div class="mb-3">
            <label for="Local" class="form-label">Local (Bloco/Sala):</label>
            <input type="text" name="Local" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>

        <div class="mb-3">
            <label for="DescricaoProblema" class="form-label">Descreva o problema:</label>
            <textarea name="DescricaoProblema" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" rows="4" required></textarea>
        </div>

        <button type="submit" class="w-1/2 bg-green-900 text-white py-2 rounded-lg hover:bg-green-800 mr-2">Enviar</button>
        <a href="{{ route('chamadosExternos.show') }}">Ver Chamado</a>
        <!-- Substitua '1' pelo ID do chamado correto -->

    </form>
</div>
</body>
</html>

