<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Email {
    private $mail;
    private $isSuccess;

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
        $this->mail->AltBody = strip_tags($body);
    }

    public function send($email, $name){
        try{
            $this->mail->setFrom(MAIL['user'], MAIL['from_name']);
            $this->mail->addAddress($email, $name);
            $this->isSuccess = true;
            $this->mail->send();

            echo "<script>alert('Formulário enviado com sucesso!')</script>";
        } catch(Exception $err){
            $this->debug_to_consoleLog($err->getMessage());
            $this->isSuccess = false;

            echo "<script>
                alert('Erro! Não foi possível enviar a mensagem :(');
            </script>";
        }

        die($this->isSuccess);
    }

    protected function debug_to_consoleLog($data) {
        $output = $data;
        if (is_array($output))
            $output = implode(',', $output);
    
        echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
    }
}