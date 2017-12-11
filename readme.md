## HelpPrompt Site - Sinopse:
Uma comunicação entre seguradora e segurado.

## Preparação para desenvolvimento:
Após clonar o repositório é necessário alguns passos para começar a desenvolver.
Obs: Esses comandos devem ser executados no terminal.

1. Primeiro instale os pacotes necessários para o projeto.
`composer install`

2. Verifica e instala atualizações dos pacotes.
`composer update`

3. Depois crie as classes e as inclue no projeto. 
`composer dump-autoload -o`

4. Gere as tabelas no banco de dados.
`php artisan migrate`

5. Alimenta o banco com informações.
`php artisan db:seed`

Após isso você deve estar pronto para contribuir com o projeto.
## Documentação de desenvolvimento:

## Ambiente de Banco de Dados `database/migrations/2014_10_12_000000_create_users_table.php`
Tabela users:


Ambiente de Controladores `app/Http/Controllers/`



