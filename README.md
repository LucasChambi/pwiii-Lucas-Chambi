# Guia Rápido: Começando com Laravel
Este guia irá ajudá-lo a configurar seu ambiente e criar seu primeiro projeto com o framework Laravel.

**O que é Laravel?**
<p>Laravel é um framework de aplicação web com uma sintaxe expressiva e elegante. Ele é focado no back-end e utiliza a linguagem PHP. O Laravel busca facilitar tarefas comuns em projetos web, como autenticação, roteamento, sessões e cache, tornando o desenvolvimento uma experiência criativa e agradável.</p>

**Pré-requisitos**
<p>Antes de começar, você precisa ter os seguintes softwares instalados e configurados no seu sistema:</p>
<ul>
<li>PHP: A linguagem de programação na qual o Laravel é construído.

<li>Composer: Um gerenciador de dependências para o PHP.

<li>Ambiente de Desenvolvimento Local: Um pacote como XAMPP ou Laragon é recomendado, pois já inclui o PHP, um servidor web (Apache) e um banco de dados (MariaDB/MySQL).
</li>
</ul>

**Passo 1: Configurando o Ambiente**
<ul>
<li>Instale o XAMPP: Baixe e instale o XAMPP. Isso instalará o PHP em seu computador (geralmente em C:\xampp\php).

<li>Configure o PHP nas Variáveis de Ambiente: Para que você possa executar o comando php de qualquer lugar no seu terminal, adicione a pasta de instalação do PHP ao PATH do sistema.

<li>Instale o Composer: Baixe e execute o instalador do Composer. Ele encontrará automaticamente sua instalação do PHP.
</li>
</ul>

**Passo 2: Instalando o Laravel**
<ul>
<li>Com o PHP e o Composer configurados, abra um terminal (como o PowerShell ou CMD) e execute o seguinte comando para instalar o Laravel Installer globalmente em sua máquina:

> composer global require laravel/installer

<li>Isso permite que você use o comando laravel new para criar novos projetos rapidamente.
</ul>

**Passo 3: Criando uma Nova Aplicação**
<ul>
<li>Navegue pelo terminal até a pasta onde você guarda seus projetos. Se estiver usando o XAMPP, um bom lugar é a pasta htdocs.

> cd C:\xampp\htdocs

<li>Use o instalador do Laravel para criar um novo projeto. Substitua meu-app pelo nome que desejar.

> laravel new meu-app

<br>
Como alternativa, você pode criar um projeto via Composer:

> composer create-project laravel/laravel meu-app
</li>
</ul>

**Passo 4: Executando o Projeto**
<ul>
<li>Seu projeto Laravel precisa de dois processos principais rodando em paralelo durante o desenvolvimento: o servidor da aplicação e o compilador de assets (CSS e JavaScript).

Acesse a pasta do projeto pelo terminal:

> cd meu-app

<li>Abra dois terminais dentro da pasta do seu projeto (no VS Code, você pode dividir o terminal).

<li>No primeiro terminal, inicie o servidor de desenvolvimento do Laravel:

> php artisan serve

Seu projeto estará rodando, geralmente no endereço http://127.0.0.1:8000.

<li>No segundo terminal, instale as dependências de front-end e inicie o compilador de assets (Vite):

> npm install <br>
> npm run dev

<li>Este comando irá compilar seus arquivos CSS e JavaScript e os manterá atualizados sempre que você fizer uma alteração.

Bom projeto!

</li>
</ul>