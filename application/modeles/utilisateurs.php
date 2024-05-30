<?php
require('connect.php'); // Inclut le fichier pour établir la connexion à la base de données.

function connectionOk($pseudo, $pw)
{
    $dbh = connect(); // Établit une connexion à la base de données.

    $sql = "SELECT * FROM utilisateur WHERE pseudo_utilisateur=? AND mdp_utilisateur=?"; // Requête SQL pour vérifier les informations de connexion.

    $sth = $dbh->prepare($sql); // Prépare la requête SQL.
    $sth->execute(array($pseudo, $pw)); // Exécute la requête avec les paramètres.

    $result = $sth->fetch(); // Récupère le résultat de la requête.

    // Vérifie si le résultat est vide, si oui, les informations de connexion sont incorrectes.
    if ($result == "") {
        return false;
    }
    return true; // Retourne vrai si les informations de connexion sont correctes.
}

function inscriptionOk($pseudo, $email){
    $dbh = connect(); // Établit une connexion à la base de données.
    
    $sql = "SELECT * FROM utilisateur WHERE pseudo_utilisateur=? OR mail_utilisateur=?"; // Requête SQL pour vérifier si le pseudo ou l'email existe déjà.

    $sth = $dbh->prepare($sql); // Prépare la requête SQL.
    $sth->execute(array($pseudo,$email)); // Exécute la requête avec les paramètres.

    $result = $sth->fetch(); // Récupère le résultat de la requête.

    // Vérifie si le résultat est vide, si oui, le pseudo ou l'email n'existe pas encore.
    if ($result == "") {
        return true;
    }
    return false; // Retourne faux si le pseudo ou l'email existe déjà.
}

function ajouterutilisateur($pseudo, $email, $pw) {
    $dbh = connect(); // Établit une connexion à la base de données.

    $sql = "INSERT INTO `utilisateur` (`pseudo_utilisateur`, `mail_utilisateur`, `mdp_utilisateur`) VALUES (:pseudo, :email, :pw)"; // Requête SQL pour ajouter un nouvel utilisateur.

    $sth = $dbh->prepare($sql); // Prépare la requête SQL.

    // Lie les valeurs aux paramètres de la requête.
    $sth->bindParam(':pseudo', $pseudo);
    $sth->bindParam(':email', $email);
    $sth->bindParam(':pw', $pw);
    

    $sth->execute(); // Exécute la requête pour ajouter l'utilisateur à la base de données.
}
?>
