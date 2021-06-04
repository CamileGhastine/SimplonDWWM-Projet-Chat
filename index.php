<?php
require 'model/model.php';
require 'service/checkForm.php';

if ($_POST) {
    $errors = checkForm($_POST);
    if ($errors === []) {
        create($_POST);
    }
}

if(isset($_GET['delete'])) {
    delete($_GET['delete']);
    $_POST['pseudo'] = $_GET['pseudo'];
}

$messages = array_reverse(findAll());

require 'view/default.php';
