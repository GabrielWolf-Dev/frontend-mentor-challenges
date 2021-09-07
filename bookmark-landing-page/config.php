<?php
    require 'vendor/autoload.php';

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
    define('INCLUDE_PATH', 'http://localhost/bookmark-landing-page/');
?>