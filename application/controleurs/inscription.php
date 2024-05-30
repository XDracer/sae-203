<?php
session_start(); // Démarre une session PHP.

require('../modeles/utilisateurs.php'); // Inclut le fichier contenant les fonctions pour gérer les utilisateurs.

if(empty($_POST['login'])){ // Vérifie si le formulaire d'inscription n'a pas été soumis alors on affiche le formulaire d'inscription.
    require('../vues/vueinscription.php');
}
else{
    if(inscriptionOk($_POST['pseudo'],$_POST['email'])){ // Vérifie si le pseudo et l'e-mail soumis sont valides.
        ajouterutilisateur($_POST['pseudo'],$_POST['email'],$_POST['pw']); // Ajoute l'utilisateur à la base de données.
        header('Location:accueil.php'); // Redirige vers la page d'accueil après une inscription réussie.
    }else{
        $_POST=[]; // Réinitialise les valeurs soumises dans le formulaire.
        header('Location:inscription.php'); // Redirige vers la page d'inscription.
        $_SESSION['erreur'] = "l'inscription a échoué"; // Stocke un message d'erreur dans la session.
    }
}
?>
