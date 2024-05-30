<?php
// Démarrage de la session
session_start();

//Demande du modeles photos
require('../modeles/photos.php');

//Si post est vide demander la vues vuePoster
if(empty($_POST)){
    require('../vues/vuePoster.php');

//Sinon
}
else {
    //Auteur = Le pseudo de la session
    $auteur = $_SESSION['pseudo'];

    //Description = Donnée entrer dans le formulaire
    $description = $_POST['description'];


    //Date du poste de la photo
    $date = date("Y-m-d H:i:s");

    //Titre = Donnée entrer dans le formulaire
    $titre = $_POST['titre'];

    //
    $nomTemporaire = $_FILES['photo']['tmp_name'];

    //On fait marcher la fonction pour recuperer : $auteur, $description, $date, $nomTemporaire
    importPhoto($auteur, $description, $date, $titre, $nomTemporaire);

    //Redirection vers accueil.php
    header('Location: accueil.php');
}