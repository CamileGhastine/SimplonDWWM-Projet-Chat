
<?php require 'view/header.php' ?>


<?php 
    var_dump($_POST);
    if ($_POST === []) { 
        require 'view/chat.php';
    } 
    
?>

<?php require 'view/footer.php' ?>