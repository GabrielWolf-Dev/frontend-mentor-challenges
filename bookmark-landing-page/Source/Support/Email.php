<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


class Email {
    private $mail;

    function __construct() {
        $this->mail = new PHPMailer(true);

        $this->mail->isSMTP();
        $this->mail->isHTML();

        $this->mail->SMTPAuth = true;
        $this->mail->CharSet = 'utf-8';
        $this->mail->SMTPSecure = 'tls';

        $this->mail->Host = MAIL['host'];
        $this->mail->Port = MAIL['port'];
        $this->mail->Username = MAIL['user'];
        $this->mail->Password = MAIL['passwd'];
    }

    public function add($subject, $body){
        $this->mail->Subject = $subject;
        $this->mail->Body = $body;
    }

    public function send($email, $name){
        try{
            $this->mail->setFrom(MAIL['user'], MAIL['from_name']);
            $this->mail->addAddress($email, $name);

            $this->mail->send();
            echo 'Message has been sent';
        } catch(Exception $err){
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}