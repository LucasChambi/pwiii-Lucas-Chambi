# Guia Rápido: Começando com Laravel

**O que é Laravel?**

- Laravel é um framework de aplicação web com uma sintaxe expressiva. Ele é focado no back-end e utiliza a linguagem PHP. O Laravel busca facilitar tarefas comuns em projetos web, como autenticação, roteamento, sessões e cache, tornando o desenvolvimento uma experiência criativa e agradável.

---
**Pré-requisitos**

Ter os seguintes softwares instalados e configurados no sistema:

- PHP: A linguagem de programação na qual o Laravel é construído.

- Composer: Um gerenciador de dependências para o PHP.

- Ambiente de Desenvolvimento Local: Um pacote como XAMPP ou Laragon é recomendado, pois já inclui o PHP, um servidor web (Apache) e um banco de dados (MariaDB/MySQL).


**Passo 1: Configurando o Ambiente**

1. Instale o XAMPP: Baixe e instale o XAMPP. Isso instalará o PHP no computador (geralmente em C:\xampp\php).

2. Configure o PHP nas Variáveis de Ambiente: Para que possa executar o comando php de qualquer lugar no seu terminal, adicione a pasta de instalação do PHP ao PATH do sistema.

3. Instale o Composer: Baixe e execute o instalador do Composer. Ele encontrará automaticamente sua instalação do PHP.

**Passo 2: Instalando o Laravel**

- Com o PHP e o Composer configurados, abra um terminal (como o PowerShell ou CMD) e execute o seguinte comando para instalar o Laravel Installer globalmente em sua máquina:
`composer global require laravel/installer`

- Isso permite que comando laravel new possa criar novos projetos.

**Passo 3: Criando uma Nova Aplicação**

1. Navegue pelo terminal até a pasta onde guarda seus projetos. Se estiver usando o XAMPP, é a pasta htdocs:
`cd C:\xampp\htdocs`

2. Use o instalador do Laravel para criar um novo projeto. Substitua meu-app pelo nome que desejar:
``laravel new meu-projeto``

- Como alternativa, você pode criar um projeto via Composer:
`composer create-project laravel/laravel meu-projeto`

**Passo 4: Executando o Projeto**

- Um projeto Laravel precisa de dois processos principais rodando em paralelo durante o desenvolvimento: o servidor da aplicação e o compilador de assets (CSS e JavaScript).

1. Acesse a pasta do projeto pelo terminal:
`cd meu-projeto`

 2. Abra dois terminais dentro da pasta do seu projeto (no VS Code, você pode dividir o terminal).

3. No primeiro terminal, inicie o servidor de desenvolvimento do Laravel (opcional):
`php artisan serve`

Seu projeto estará rodando, geralmente no endereço http://127.0.0.1:8000.

 4. No segundo terminal, instale as dependências de front-end e inicie o compilador de assets (Vite):
``npm install`` ,
depois:
``npm run dev``

- Este comando irá compilar seus arquivos CSS e JavaScript e os manterá atualizados sempre que fizer uma alteração.
------------------------------------------------------------------------------------------------------------------

  

# Guia: Configurando um Projeto Laravel Após o git clone

  

- Este guia rápido mostra os passos essenciais para configurar e rodar um projeto Laravel que você acabou de clonar de um repositório Git.

**Pré-requisitos**

1. certifique-se de que você tem os seguintes softwares instalados em seu ambiente:

- PHP
- COMPOSER (gerenciador de dependências para PHP)
- Node.js e npm (gerenciador de pacotes para javascript)
- GIT

**Passo a Passo**
- Siga os comandos abaixo no seu terminal (como o PowerShell) dentro da pasta do projeto.

  

**Copiar o Arquivo de Ambiente**

1. Primeiro, crie seu próprio arquivo de configuração de ambiente copiando o arquivo de exemplo .env.example para um novo arquivo chamado .env .

2. O arquivo .env armazena as configurações específicas do seu ambiente, como as credenciais do banco de dados. Ele é ignorado pelo Git para manter suas informações sensíveis seguras.

  

**Instalar Dependências do PHP**

1. Execute o Composer para baixar e instalar todas as bibliotecas PHP de que o projeto necessita:
``composer install``

**Instalar Dependências do JavaScript**

1. Agora, instale as dependências de front-end, como Vue.js, React ou bibliotecas CSS, usando o NPM:
``npm install``

  

**Gerar a Chave da Aplicação**

1. O Laravel precisa de uma chave de encriptação única para proteger sessões e outros dados sensíveis:
``php artisan key:generate``

- Este comando irá gerar uma chave aleatória e a inserirá automaticamente no seu arquivo .env.

**Executar as Migrações do Banco de Dados**

1.  Crie as tabelas no seu banco de dados executando as migrações do projeto. Certifique-se de que suas credenciais de banco de dados estão corretas no arquivo .env antes de rodar este comando:
``php artisan migrate``

2. O terminal poderá perguntar se você deseja criar o banco de dados caso ele não exista. Digite yes e pressione Enter.

**Iniciar o Ambiente de Desenvolvimento**

- Após seguir todos os passos anteriores, execute o comando abaixo para compilar os assets (CSS, JS) e iniciar o servidor de desenvolvimento:
``composer run dev``

- Este comando geralmente é um atalho configurado no arquivo composer.json do projeto para executar tarefas como npm run dev ou php artisan serve.

-----------------------------------------------------------------------------
### **1. Configuração e Acesso ao Banco de Dados**

-   Primeiro, instale a extensão **SQLite** no VS Code para poder visualizar e gerenciar o banco de dados.
    
-   Em seguida, para abrir o arquivo, pressione `Ctrl+Shift+P` (ou `Cmd+Shift+P` no macOS) e digite "SQLite". Selecione a opção **"SQLite: Open Database"** e escolha o arquivo `database.sqlite`.
    

----------

### **2. Preparação do Seeder**

-   Abra o arquivo `databaseSeeder.php`.
    
-   Localize e comente a linha 16, que é responsável por criar registros no banco de dados. Isso impede que o seeder insira dados duplicados a cada execução.
    

----------

### **3. Execução do Seeder**

-   Abra o terminal e execute o comando: `php artisan db:seed`.
    
-   Este comando irá popular o banco de dados com os registros definidos no seeder.
    

----------

### **4. Visualização e Alteração dos Dados**

-   Após a execução, atualize o **SQLite Explorer** no VS Code.
    
-   Clique no ícone de "play" ao lado da tabela **`users`**.
    
-   Você verá os 10 registros que foram inseridos. A partir daí, você pode editar, excluir ou adicionar novos registros conforme necessário.

----------------------------------------
