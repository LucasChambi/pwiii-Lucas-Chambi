<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Senha</title>
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
<form method="POST" action="{{ url('teste') }}">
    @csrf
    {{-- Campos do formulário --}}
    <div>
        <label for="email">Email:</label>
        <input type="email" name="email" required>
    </div>
    <div>
        <label for="password">Senha:</label>
        <input type="password" name="password" required>
    </div>
    <button type="submit">ENTRAR</button>
</form>