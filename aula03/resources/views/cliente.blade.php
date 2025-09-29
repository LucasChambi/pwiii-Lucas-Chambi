<!DOCTYPE html>
<html>
<head>    
    <title>Cliente</title>
    <style>
    /* tailwindcss v4.0.7 | MIT License | https://tailwindcss.com*/
    </style>
    <link rel="stylesheet" href="{{ asset('./stylesheet/cliente.css') }}">
    </head>
<body>

    <nav>
        <div>

            <div id="cliente">
            <a href="/cliente">Cliente</a>
            </div>
         <div>
    </nav>
    
<section>
<div>
    <div>
        <form action="/cliente" method="post">
            @csrf {{-- proteção de CRUD/formulario--}}
            <fieldset>
                <legend><b>Cadastro de Cliente</b></legend>
                <br>

                <div class="nome">
                    <label>Primeiro Nome</label>
                    <input type="text" name="txNomeCliente" id="nome" required>
                </div>
                <br>
                <br>

                <div class="sobrenome">
                    <label>Sobrenome: </label>
                    <input type="text" name="txSobrenome" id="sobrenome" required >
                </div>
                <br>
                <br>


                <button onclick id="submit">Salvar</button>

            </fieldset>
        </form>
    </div>
</div>
</section>

<div class="foreach" >
    <table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Primeiro Nome</th>
            <th>Sobrenome</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cliente as $c)
            <tr>
                <td>{{ $c->id }}</td>
                <td>{{ $c->primeiroNome }}</td>
                <td>{{ $c->sobrenome }}</td>
            </tr>
        @endforeach
    </tbody>
    </table>
</div>  
 
</body>
</html>