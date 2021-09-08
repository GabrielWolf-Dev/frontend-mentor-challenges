<?php
include('../config.php');
require_once './Form.php';

$form = new Form($_POST);
$form->sendForm();
