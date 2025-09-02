# Guia Rápido: Começando com Laravel

**O que é Laravel?**
<p>Laravel é um framework de aplicação web com uma sintaxe expressiva. Ele é focado no back-end e utiliza a linguagem PHP. O Laravel busca facilitar tarefas comuns em projetos web, como autenticação, roteamento, sessões e cache, tornando o desenvolvimento uma experiência criativa e agradável.</p>

**Pré-requisitos**
<p>Ter os seguintes softwares instalados e configurados no sistema:</p>
<ul>
<li>PHP: A linguagem de programação na qual o Laravel é construído.

<li>Composer: Um gerenciador de dependências para o PHP.

<li>Ambiente de Desenvolvimento Local: Um pacote como XAMPP ou Laragon é recomendado, pois já inclui o PHP, um servidor web (Apache) e um banco de dados (MariaDB/MySQL).
</li>
</ul>

**Passo 1: Configurando o Ambiente**
<ul>
<li>Instale o XAMPP: Baixe e instale o XAMPP. Isso instalará o PHP no computador (geralmente em C:\xampp\php).

<li>Configure o PHP nas Variáveis de Ambiente: Para que possa executar o comando php de qualquer lugar no seu terminal, adicione a pasta de instalação do PHP ao PATH do sistema.

<li>Instale o Composer: Baixe e execute o instalador do Composer. Ele encontrará automaticamente sua instalação do PHP.
</li>
</ul>

**Passo 2: Instalando o Laravel**
<ul>
<li>Com o PHP e o Composer configurados, abra um terminal (como o PowerShell ou CMD) e execute o seguinte comando para instalar o Laravel Installer globalmente em sua máquina:

> composer global require laravel/installer

<li>Isso permite que comando laravel new possa criar novos projetos.
</ul>

**Passo 3: Criando uma Nova Aplicação**
<ul>
<li>Navegue pelo terminal até a pasta onde guarda seus projetos. Se estiver usando o XAMPP, é a pasta htdocs.

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
<li>Um projeto Laravel precisa de dois processos principais rodando em paralelo durante o desenvolvimento: o servidor da aplicação e o compilador de assets (CSS e JavaScript).

Acesse a pasta do projeto pelo terminal:

> cd meu-app

<li>Abra dois terminais dentro da pasta do seu projeto (no VS Code, você pode dividir o terminal).

<li>No primeiro terminal, inicie o servidor de desenvolvimento do Laravel (opcional): 

> php artisan serve

Seu projeto estará rodando, geralmente no endereço http://127.0.0.1:8000.

<li>No segundo terminal, instale as dependências de front-end e inicie o compilador de assets (Vite):

> npm install <br>
> npm run dev

<li>Este comando irá compilar seus arquivos CSS e JavaScript e os manterá atualizados sempre que você fizer uma alteração.

Bom projeto!

</li>
</ul>

<br>
------------------------------------------------------------------------------------------------------------------

# Guia: Configurando um Projeto Laravel Após o git clone

Este guia rápido mostra os passos essenciais para configurar e rodar um projeto Laravel que você acabou de clonar de um repositório Git.

**Pré-requisitos**
Antes de começar, certifique-se de que você tem os seguintes softwares instalados em seu ambiente:

<ul>
<li>PHP</li>
<li>COMPOSER (gerenciador de dependências para PHP)</li>
<li>Node.js e npm (gerenciador de pacotes para javascript)
<li>GIT</li>
</ul>

**Passo a Passo**<br>
Siga os comandos abaixo no seu terminal (como o PowerShell) dentro da pasta do projeto.

1. **Copiar o Arquivo de Ambiente**
Primeiro, crie seu próprio arquivo de configuração de ambiente copiando o arquivo de exemplo .env.example para um novo arquivo chamado .env .

O arquivo .env armazena as configurações específicas do seu ambiente, como as credenciais do banco de dados. Ele é ignorado pelo Git para manter suas informações sensíveis seguras.

2. **Instalar Dependências do PHP**
Execute o Composer para baixar e instalar todas as bibliotecas PHP de que o projeto necessita.

> composer install

3. **Instalar Dependências do JavaScript**
Agora, instale as dependências de front-end, como Vue.js, React ou bibliotecas CSS, usando o NPM.

> npm install

4. **Gerar a Chave da Aplicação**
O Laravel precisa de uma chave de encriptação única para proteger sessões e outros dados sensíveis.

> php artisan key:generate

Este comando irá gerar uma chave aleatória e a inserirá automaticamente no seu arquivo .env.

5. **Executar as Migrações do Banco de Dados**
Crie as tabelas no seu banco de dados executando as migrações do projeto. Certifique-se de que suas credenciais de banco de dados estão corretas no arquivo .env antes de rodar este comando.

> php artisan migrate

O terminal poderá perguntar se você deseja criar o banco de dados caso ele não exista. Digite yes e pressione Enter.

6. **Iniciar o Ambiente de Desenvolvimento**
Após seguir todos os passos anteriores, execute o comando abaixo para compilar os assets (CSS, JS) e iniciar o servidor de desenvolvimento.

>composer run dev

Este comando geralmente é um atalho configurado no arquivo composer.json do projeto para executar tarefas como npm run dev ou php artisan serve.

-----------------------------------------------------------------------------
Banco de Dados no Laravel

Pra executar o arquivo database.slite, precisamos instalar uma extensão chamada
SQLite, depois disso, precisamos fazer uma pesquisa apertando o comando maior que mais p, e clicar na opção Open Database, logo depois indo no arquivo databaseSeeer.php , precisamos desmarcar a linha 16 pq é responsavel por criar registros no banco de dados, quando estiver pronto, ir no terminal executar o comando php artisan db:seed, quando fizer isso, basta atualizar o sqlite explorer e dar play na categoria users, irá aparacer 10 registros que dá para alterar.

----------------------------------------
new query - criar um campo em outro arquivo.

php artisan make:migration criar_arquivo

php artisan migrate:rollback