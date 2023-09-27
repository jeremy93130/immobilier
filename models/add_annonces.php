<?php
require_once("../inc/database.php");

if (isset($_POST["submit"])) {
    $title = htmlspecialchars(strtoupper($_POST["title"]));
    $description = htmlspecialchars($_POST["description"]);
    $postalCode = htmlspecialchars($_POST["postalCode"]);
    $town = htmlspecialchars($_POST["town"]);
    $type = htmlspecialchars($_POST["type"]);
    $price = htmlspecialchars($_POST["price"]);

    // Connexion à la base de données : 
    $db = dbConnexion();

    // Préparation de la requête d'insertion :
    $request = $db->prepare('INSERT INTO advert (title,description,postal_code,city,type,price) VALUES (?,?,?,?,?,?)');

    // Execution de la requête :
    try {
        $request->execute(array($title, $description, $postalCode, $town, $type, $price));
        header("Location: ../accueil.php");
    } catch (PDOException $error) {
        echo $error->getMessage();
    }
}


?>