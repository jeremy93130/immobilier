<?php
require_once("./inc/database.php");
function adList()
{
    $adList = null;
    // Se connecter à la base de données : 
    $db = dbConnexion();

    // Préparer la requête :
    $request = $db->prepare("SELECT * FROM advert ORDER BY id DESC limit 15");

    // Executer la requête :
    try {
        $request->execute();
        // Récuperer le résultat de la requête et la convertir en tableau :
        return $adList = $request->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $error) {
        $error->getMessage();
    }
}
function consult($id)
{
    $consultList = null;
    // Se connecter à la base de données : 
    $db = dbConnexion();

    // Préparer la requête :
    $request = $db->prepare("SELECT * FROM advert WHERE id = ?");

    // Executer la requête :
    try {
        $request->execute(array($id));
        // Récuperer le résultat de la requête et la convertir en tableau :
        return $consultList = $request->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $error) {
        $error->getMessage();
    }
}