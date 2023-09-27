<?php

function dbConnexion()
{
    $connexion = null;
    try {
        $connexion = new PDO("mysql:host=localhost;dbname=wf3_php_intermediaire_jeremy", "root", "");
    } catch (PDOException $error) {
        $error->getMessage();
    }
    return $connexion;
}