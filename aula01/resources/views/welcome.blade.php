<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Senha</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <form method="POST" action="{{ url('teste') }}" class="bg-orange-200 p-8 rounded-lg shadow-lg w-full max-w-md">
        @csrf
        
        <h1 class="text-2xl font-bold text-center mb-6 text-gray-800">Login</h1>
        
        <div class="mb-4">
            <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Email:</label>
            <input type="email" name="email" id="email" 
                class="w-full border-2 border-gray-300 rounded-lg p-3 focus:outline-none focus:border-amber-950"
                required>
        </div>
        
        <div class="mb-6">
            <label for="password" class="block text-sm font-semibold text-gray-700 mb-2">Senha:</label>
            <input type="password" name="password" id="password" 
                class="w-full border-2 border-gray-300 rounded-lg p-3 focus:outline-none focus:border-amber-950" 
                required>
        </div>
        
        <button type="submit" class="w-full p-3 bg-amber-950 text-white font-bold rounded-lg hover:bg-amber-900 transition">
            ENTRAR
        </button>
    </form>
</body>
</html>

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Senha</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
    {{--GET - irá coletar dados--}}
    {{--POST - irá enviar dados--}}
    {{--PUT - irá atualizar dados--}}
    {{--DELETE - irá deletar dados--}}

    {{--PATCH - irá atualizar uma parte dos dados--}}
    {{--HEAD - irá coletar os cabeçalhos da requisição--}}
    {{--OPTIONS - irá coletar as opções da requisição--}}
    {{--CONNECT - irá conectar a um servidor--}}
    {{--TRACE - irá rastrear a requisição--}}
    {{-- 
<form method="POST" action="{{ url('teste') }}" class="bg-orange-200 p-2 text-center">
    @csrf
    {{-- Campos do formulário --}}
{{--
    <div class="mb-4 border-2 border-amber-50 p-4">
        <label for="email">Email:</label>
        <input type="email" name="email" 
        class="border-black border-2 rounded-3xl p-2 m-2"required>
    </div>
    <div class="mb-4 border-2 border-amber-50 p-4">
        <label for="password">Senha:</label>
        <input type="password" name="password" 
        class="border-black border-2 rounded-3xl p-2 m-2" required>
    </div>
    <button type="submit" class="p-4 bg-amber-950 text-white">ENTRAR</button>
</form>
--}}