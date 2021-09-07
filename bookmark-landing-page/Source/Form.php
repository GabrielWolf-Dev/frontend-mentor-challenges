<?php
require_once 'Email.php';

class Form {
    private $inputs;
    private $subject;
    private $body;
    private $user_email;
    private $user_name;
    private $isValidated = false;

    function __construct($inputs){
        $this->inputs = $inputs;
        $this->user_name = 'Gabriel Wolf';
        $this->user_email = $_ENV['EMAIL_USER'];

        $this->validateForm();
    }

    public function sendForm(){
        if($this->isValidated == true){
            $this->subject = 'Nova mensagem do website!';
            foreach($this->inputs as $key => $value){
                if($key !== 'sendForm'){
                    $this->body .= ucfirst($key).": ".$value;
                    $this->body .= "<br/><hr>";
                }
            }

            $email = new Email();
            $email->add($this->subject, $this->body);
            $email->send($this->user_email, $this->user_name);
        } else {
            echo "<script>
                alert('Campos inválidos!');
            </script>";
        }
    }

    private function validateForm(){
        $filterInputs = [
            "nome" => FILTER_SANITIZE_STRIPPED,
            "email" => FILTER_VALIDATE_EMAIL,
            "telefone" => FILTER_SANITIZE_STRIPPED,
            "mensagem" => FILTER_SANITIZE_STRIPPED
        ];
        $filteredInputs = filter_input_array(INPUT_POST, $filterInputs);

        foreach($filteredInputs as $input){
            if($input !== false)
                $this->isValidated = true;

            if(empty($input))
                $this->isValidated = false;
        }
        $this->checkPhone($this->inputs['telefone']) ? true : $this->isValidated = false;
    }

    private function checkPhone($phone){
        if(preg_match("/^(\(\d{2}\))\s?(\d{5}-\d{4})$/", $phone) == '0'){
            return false;
        } else {
            return true;
        }
    }
}