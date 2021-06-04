<?php
require 'model/model.php';
require 'service/checkForm.php';

if ($_POST) {
    $errors = checkForm($_POST);
    if ($errors === []) {
        create($_POST);
    }
}

// Attention ici il manque d'autres critères de validation car tout le monde pourrait supprimer n'importe quel message en modifiant le paramètre delete dans l'url.
if(isset($_GET['delete'])) {
    delete($_GET['delete']);
    $_POST['pseudo'] = $_GET['pseudo'];
}

$messages = array_reverse(findAll());

require 'view/default.php';
