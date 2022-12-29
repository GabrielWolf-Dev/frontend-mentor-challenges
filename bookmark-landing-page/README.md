# Frontend Mentor - Bookmark landing page

Nesta landing page, quero aplicar meu conhecimento sobre envio de formulários com PHP e JS.

## Tecnologias:

- HTML 5
- CSS3 com SASS aplicando arquitetura ITCSS + BEM
- JavaScript para elementos de interação, animações e validação de formulário para envio do script PHP
- PHP para roteamento do sistema, envio de formulário usando PHPMailer gerenciado no [arquivo do composer](https://github.com/GabrielWolf-Dev/frontend-mentor-challenges/blob/main/bookmark-landing-page/composer.json)

## Demonstração:

![Visualization the project in gif file](https://raw.githubusercontent.com/GabrielWolf-Dev/frontend-mentor-challenges/main/bookmark-landing-page/assets/bookmark-gif.gif)

## Como usar este projeto?

. Primeiro, use algum servidor web, no meu caso usei [XAMPP](https://www.apachefriends.org/pt_br/index.html).
<br>
. Clone o projeto ou [baixe](https://github.com/GabrielWolf-Dev/frontend-mentor-challenges/archive/refs/heads/main.zip) este repositório e mova o arquivo "bookmark-landing-page" em o arquivo "htdocs", se você estiver usando o XAMPP.
<br>
. Inicie o servidor web e configure as variáveis de ambiente no projeto raiz criando o arquivo ".env".
Neste arquivo ".env", para configurar a validação do envio do formulário no PHPMailer, deve-se inserir HOST, PORT, EMAIL(Email que envia a mensagem do formulário), PASS, EMAIL_USER(Email que recebe a mensagem do formulário).
<br>
. Esses valores no arquivo ".env" são consumidos por constantes no ["config.php"](https://github.com/GabrielWolf-Dev/frontend-mentor-challenges/blob/main/bookmark-landing-page/config.php) arquivo:
```
    // Variable Enviroment Config:
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    // Constants
    define('MAIL', [
        "host" => $_ENV['HOST'],
        "port" => $_ENV['PORT'],
        "user" => $_ENV['EMAIL'],
        "passwd" => $_ENV['PASS'],
        "from_name" => "User Mailer",
    ]);
```
