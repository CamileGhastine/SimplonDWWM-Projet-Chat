<?php

function findAll(): array
{
    $db = getDBConnection();

    $request = $db->query('SELECT * FROM message ORDER BY date DESC limit 10');
    $request->setFetchMode(PDO::FETCH_ASSOC);

    $messages = $request->fetchAll();

    $request->closeCursor();

    return $messages;
}

function create(array $post): void
{
    $db = getDBConnection();

    $request = $db->prepare('INSERT INTO message(pseudo, content) VALUES (:pseudo, :content)');
    $request->execute([
        'pseudo' => $post['pseudo'],
        'content' => $post['content']
    ]);
}

function getDBConnection()
{
    try {
        $option = [
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        return new PDO('mysql:host=localhost;dbname=chat', 'root', '', $option);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
}
