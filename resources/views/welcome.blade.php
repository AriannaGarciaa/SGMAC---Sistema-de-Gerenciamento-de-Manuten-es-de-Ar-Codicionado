<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PINGO - Sistema de Gerenciamento de Manutenções de Ar-Condicionado</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
   
    <body class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="flex w-full max-w-3xl bg-white rounded-lg shadow-lg overflow-hidden">
            <!-- Imagem à esquerda -->
            <div class="w-1/2 bg-gradient-to-b from-blue-900 to-blue-500 flex flex-col items-center justify-center">
                <img src="{{ asset('imgs/Pingo.png') }}" alt="Pingo" class="w-2/3 ">
                <img src="{{ asset('imgs/penguin.png') }}" alt="Mascote com Ar-Condicionado" class="w-2/3">
            </div>
            
            <!-- Formulário de Login -->
            <div class="w-1/2 bg-blue-900 p-6 flex flex-col items-center justify-center">
                <h2 class="text-xl font-bold text-white mb-4">FAÇA LOGIN!</h2>
                <form method="POST" action="{{ route('login') }}" class="w-full">
                    @csrf

                    <!-- button select -->
                    <label class="block text-white">FUNÇÃO</label>
                    <select name="Function" class="w-full px-3 py-2 border rounded-lg mb-3 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                        <option value="1">Servidor</option>
                        <option value="2">Estágiario</option>
                    </select> 
                    <label class="block text-white">USUÁRIO</label>
                    <input type="text" name="email" class="w-full px-3 py-2 border rounded-lg mb-3 focus:outline-none focus:ring-2 focus:ring-blue-500" required autofocus>
                    @error('email')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                    
                    <label class="block text-white">SENHA</label>
                    <input type="password" name="password" class="w-full px-3 py-2 border rounded-lg mb-3 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    @error('password')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                    
                    <div class="flex justify-between text-sm text-gray-200 mb-3">
                        <label><input type="checkbox" name="remember" class="mr-2 opacity-75 border border-white rounded">Lembrar usuário</label>
                        <a href="{{ route('password.request') }}" class="text-blue-300 hover:underline">Esqueci a senha</a>
                    </div>
                    
                    <button type="submit" class="w-full bg-white text-blue-900 py-2 rounded-lg hover:bg-gray-200">ENTRAR</button>
                </form>
                <div class="mt-4 text-sm text-gray-200">
                    <span>Não tem uma conta?</span>
                    <a href="{{ route('register') }}" class="text-blue-300 hover:underline">Registrar</a>
                </div>
                <img src="{{ asset('imgs/IFPequena.png') }}" alt="loguinho" class="w-1/3 ml-auto mt-4 mr-0">
            </div>
        </div>
    </body>
</html>