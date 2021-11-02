# Frontend Mentor - Bookmark landing page

In this landing page, I want apply my knowledge about form submission with PHP and JS that even though I'm Front-End developer, I need know about how make these things.

So I learned several things about the PHP language and how it works even though it is a simple feature, using OOP and applying a routing system.

## Tools and tecnologies:

- HTML 5
- CSS3 with SASS applying ITCSS architecture + BEM
- JavaScript for interact elements, animations and form validation for send the PHP script
- PHP for system routing, form submission using PHPMailer managed in the [composer file](https://github.com/GabrielWolf-Dev/frontend-mentor-challenges/blob/main/bookmark-landing-page/composer.json)
- Assets provided to platform when I downloaded

## Visualization:
![Visualization the project in gif file](https://raw.githubusercontent.com/GabrielWolf-Dev/frontend-mentor-challenges/main/bookmark-landing-page/assets/bookmark-gif.gif)

## How to use this project?
First, use some web server, in my case I used [XAMPP](https://www.apachefriends.org/pt_br/index.html).
<br>
Clone the project or [download](https://github.com/GabrielWolf-Dev/frontend-mentor-challenges/archive/refs/heads/main.zip) this repository and move the file "bookmark-landing-page" in the "htdocs" file, if you are using XAMPP.
<br>
Start the web server and config the enviroment variables in the root project creating ".env" file.
In this ".env" file, for configurate the form submission validate in the PHPMailer, you must insert HOST, PORT, EMAIL(Email that send form message), PASS, EMAIL_USER(Email that receive the form message).
<br>
Theses values in ".env" file are consumed for constants in the ["config.php"](https://github.com/GabrielWolf-Dev/frontend-mentor-challenges/blob/main/bookmark-landing-page/config.php) file:
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
Then it's ready to be used! 🙂
