<?php
require 'model/model.php';
require 'service/checkForm.php';

if ($_POST) {
    $errors = checkForm($_POST);
    if ($errors === []) {
        create($_POST);
    }
}

$messages = array_reverse(findAll());

require 'view/default.php';
