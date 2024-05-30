<?php
// Démarrage de la session
session_start();

// Inclusion du fichier contenant les fonctions liées aux utilisateurs
require('../modeles/utilisateurs.php');

// Vérifie si des données ont été envoyées via la méthode POST
if (empty($_POST)) {
    // Si aucune donnée n'est envoyée, inclut le fichier pour afficher le formulaire de connexion
    require('../vues/vueConnexion.php');
} else {
    // Si des données sont envoyées, vérifie les informations de connexion
    if (connectionOk($_POST['pseudo'], $_POST['pw'])) {
        // Si les informations de connexion sont correctes, stocke le pseudo de l'utilisateur dans une variable de session
        $_SESSION['pseudo'] = $_POST['pseudo'];
        // Redirige l'utilisateur vers la page d'accueil
        header('Location:accueil.php');
    } else {
        // Si les informations de connexion sont incorrectes, stocke un message d'erreur dans une variable de session
        $_SESSION['error'] = 'le pseudo ou le mots de passe est incorrect';
        // Redirige l'utilisateur vers la page de connexion
        header('Location:connexion.php');
    }
}
