<?php

function findAll()
{
    try {
        $option = [
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        $db = new PDO('mysql:host=localhost;dbname=chat', 'root', '', $option);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }

    $request = $db->query('SELECT * FROM message');
    $request->setFetchMode(PDO::FETCH_ASSOC);

    $messages = $request->fetchAll();

    $request->closeCursor();

    return $messages;
}
