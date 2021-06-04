<?php
require 'model/model.php';

if($_POST) {
   create($_POST);
}

$messages = findAll();

require 'view/default.php';

