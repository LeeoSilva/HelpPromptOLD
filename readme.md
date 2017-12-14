## HelpPrompt Site - Sinopse:
Uma comunicação entre seguradora e segurado.

## Requisitos mínimos pra contribuir com o projeto:
# Software
Composer;
Git;
WAMP ou XAMP Server caso esteja rodando Windows;
e LAMP Server caso esteja rodando Linux;

## Preparação para desenvolvimento:
Após clonar o repositório são necessários alguns passos para começar a desenvolver.
Obs: Esses comandos devem ser executados no terminal.

1. Primeiro instale os pacotes necessários para o projeto.
`composer install`

2. Verifica e instala atualizações dos pacotes.
`composer update`

3. Depois crie as classes e as inclue no projeto. 
`composer dump-autoload -o`

4. E configure seu ambiente.
`mv .env.exemple .env && php artisan key:generate`

5. Sincronize seu banco de dados local.
Entre no MySQL e crie um banco de dados chamado `HelpPrompt`
Depois digite `php artisan migrate`
e por ultimo alimente o banco com `php artisan db:seed`


Após isso você deve estar pronto para contribuir com o codigo.
## Documentação de desenvolvimento:


## Atualizando seu repositório local:

1. Verifique `branch` atual.
`git branch`

Deve mostrar o nome de seu `branch` atual com um asterisco (*)

2. E então atualize seu `branch` local com o `branch` remoto
`git pull origin <branch>` (sem asterisco)

Seu repositório deve estar atualizado a esse ponto.

## Ambiente de Banco de Dados `database/migrations/2014_10_12_000000_create_users_table.php`
Tabela users: `App\users`;
Tabela geo: `App\geo`;
Ambiente de Controladores `app/Http/Controllers/`;


