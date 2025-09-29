{{--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Senha</title>
</head>
<body>
    <h1>Verificar senha</h1>
    @csrf
    <form action="" method="GET">
        Email: <input type="email" name="email" required><br>
        <br>
        Senha: <input type="text" name="senha" required><br>
        <br>
        <input type="submit" name="submit" value="testar"><br>
        <br>
    </form>
    {{--GET - irá coletar dados--}}
    {{--POST - irá enviar dados--}}
    {{--PUT - irá atualizar dados--}}
    {{--DELETE - irá deletar dados--}}

    {{--PATCH - irá atualizar uma parte dos dados--}}
    {{--HEAD - irá coletar os cabeçalhos da requisição--}}
    {{--OPTIONS - irá coletar as opções da requisição--}}
    {{--CONNECT - irá conectar a um servidor--}}
    {{--TRACE - irá rastrear a requisição--}}
    {{--Os credenciais corretos vai direcionar para a pagina de teste com a tag script e o metodo
        window.location.href(utilizado para redirecionar o usuario para outra pagina)--}}
    {{--@php
    if(isset($_GET['senha']) && isset($_GET['email'])){
        $senha = $_GET['senha'];
        $email = $_GET['email'];
        if($senha == "12345" && $email == "admin@email.com"){
            echo "<script>
                  window.location.href = '".url('/teste')."';
                  </script>";
        } else {
            echo "Senha ou email incorretos!";
        }
    }
    @endphp
</body>
</html>--}}
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