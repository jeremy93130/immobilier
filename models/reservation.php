<?php

require_once("../inc/database.php");

if (isset($_POST["book"])) {
    $message = htmlspecialchars($_POST["message"]);
    $id = htmlspecialchars($_POST["annonce_id"]);
    //Connexion à la base de données :
    $db = dbConnexion();

    //Préparer la requête d'update:
    $request = $db->prepare("UPDATE advert SET reservation_message = ?WHERE id=?");

    // Executer la requête :
    try {
        $request->execute(array($message, $id));
        header("Location: ../accueil.php");
    } catch (PDOException $error) {
        $error->getMessage();
    }


}