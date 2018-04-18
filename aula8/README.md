# Aula 8

## Composer

Gerenciador de dependências do PHP


## Laravel

Framework que será estudado na disciplina. 

Utilizaremos a versão 5.5 porque utilizamos a versão 7.0 do PHP em sala de aula.

No caso do meu projeto, utilizarei a versão 5.6 pois estou utilizando a versão 7.2 do PHP.


### Criando projeto Laravel através do Composer

Primeiro é necessário especificar o comando do composer (`composer create-project`) e, em seguida, você especifica o
`fornecedor / framework:versão nome-da-pasta-do-projeto`. Se você não especificar a versão do projeto, o composer
instalará a última versão do Laravel.

Comando utilizado em sala de aula:

`composer create-project laravel/laravel:5.5 semana09`

No meu caso, o comando ficou dessa forma:

`composer create-project laravel/laravel laravel`

*Lembrando: não especifiquei a versão do framework no meu comando porque estou utilizando a versão mais recente do PHP 
até hoje, logo, consigo utilizar a versão mais recente do Laravel hoje.*

O composer irá instalar o framework e suas dependências básicas para um novo projeto. *Isso pode demorar um pouco.*


##### Container do Laravel

Quando o Composer terminar de processar o comando de criação de novo projeto Laravel, ele gerará o *Container* do
Laravel, onde será guardado todo o seu projeto Laravel com todos os diretórios e arquivos que estarão estruturados de 
forma organizada para que o seu projeto possa escalar sem problema algum.

### MVC

O Laravel dispõe, em sua estrutura, o padrão de projeto MVC.

O MVC é um padrão de projeto que permite separar os conceitos de Model, View e Controller.

##### Model

Arquivos que serão responsáveis por estruturar e lidar com os dados da aplicação.

##### View

Arquivos que serão responsáveis por exibir, para o usuário, a aplicação e suas respectivas telas.

##### Controller

Arquivos que serão responsáveis por fazer o intermédio entre a Model e a View. Basicamente, estes arquivos do Controller
farão o tratamento do que o usuário fez na View e buscará, se necessário, nos módulos da Model os dados necessários para
serem exibidos na View.

#### App

Diretório aonde estão contidos os arquivos de Model e de Controller.

#### Resources

Diretório que guardará os arquivos de View.

#### Public

Única pasta que o usuário consegue ter acesso durante a aplicação.

### Routes

Pasta aonde está organizada os arquivos de rotas da aplicação.


#### Artisan

Ferramenta de linha de comando do Laravel que lhe dará suporte com diversos comandos que automatizará seu 
desenvolvimento. Para saber sobre os possíveis comandos que você pode executar com o Artisan, rode o seguinte comando
no terminal: 

`php artisan helper`

### Arquivo .env

Arquivo que conterá algumas variáveis de ambiente.

#### Variável `APP_KEY`

Por padrão, essa variável vem sem nenhum valor. Porém é necessário que você insira uma chave para que o seu projeto 
possa ser executado.

Para gerar o valor dessa variável de ambiente, feche o arquivo .env, abra o terminal e execute o seguinte comando:

`php artisan key:generate`

Após esse comando ter sido executado, o valor da variável `APP_KEY` será preenchido lá no arquivo .env.

 

### Executando projeto

Para executar o seu projeto, execute o seguinte comando no terminal:

`php artisan serve`

Por padrão, o Laravel executará o seu projeto na porta 8000. Mas para você especificar a porta, você pode utilizar o 
comando:

`php artisan serve --port 80`

Para a porta 80, talvez seja necessário você utilizar o comando de super usuário, se estiver usando Linux. O comando
ficará dessa forma:

`sudo php artisan serve --port 80`