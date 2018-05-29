# HelpPrompt Site - Sinopse:
Uma comunicação entre seguradora e segurado.

## Requisitos mínimos pra contribuir com o projeto:
### Software
+ Composer;
+ Git;
+ Apache;
+ MySQL ou MariaDB;
+ PHP7;

### Preparação para desenvolvimento:
Após clonar o repositório são necessários alguns passos para começar a desenvolver.
Obs: Esses comandos devem ser executados no terminal.

1. Primeiro instale os pacotes necessários para o projeto.
`composer install`

2. Verifica e instala atualizações dos pacotes.
`composer update`

3. Depois crie as classes e as inclue no projeto.
`composer dump-autoload -o`

4. E configure seu ambiente.
`cp .env.exemple .env && php artisan key:generate`

5. Sincronize seu banco de dados local.
Entre no MySQL e crie um banco de dados chamado `HelpPrompt`
Depois digite `php artisan migrate`
e por ultimo alimente o banco com `php artisan db:seed`


Após isso você deve estar pronto para contribuir com o codigo.
## Documentação de desenvolvimento:


### Atualizando seu repositório local:

1. Verifique `branch` atual.
`git branch`

Deve mostrar o nome de seu `branch` atual com um asterisco (*)

2. E então atualize seu `branch` local com o `branch` remoto
`git pull origin <branch>` (sem asterisco)

Seu repositório deve estar atualizado a esse ponto.

## Enviando alterações para o repositório:

1. Prepare os arquivos para o envio.
`git add <seus arquivos alterados>`

2. Comente as alterações.
`git commit -m '<comentario sobre as alterações>'`

3. Envie para o branch principal.
`git push -u origin master`


## Lista de afazeres:
#### Página Index
+ Cabeçalho mobile;
+ Arrumar faleconosco (banco);
+ Arrumar imagem parallax;
+ Enviar página work (banco);
+ Site inicia no fale conosco;
+ Alinhar a página work em todos os monitores;
+ Adicionar tipo de serviço na página work;
+ Adicionar país da empresa na página work;
+ Adicionar máscara de telefone nas 2 páginas que contem um campo de telefone;

## Lista de afazeres completos:
* Button (aparece no parallax quando atualiza) (Feita por Lorena);
* Página erro 404 (feito por Lorena);
* Página erro encontrado (feito por Lorena);
* Arrumar banco (feito por Leeo);
* Criar nova página para começo do cabeçalho (feito por Leeo);
* Excluir SMS Gateway (feito por Leeo);
* Excluir arquivos obsoletos (feito por Leeo);