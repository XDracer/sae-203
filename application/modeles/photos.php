<?php
require('../modeles/connect.php');

function obtenirPhotos()
{
    // Connexion à la base de données
    $dbh = connect();

    // Requête SQL pour obtenir les photos, triées par date
    $sql = "SELECT * 
            FROM photo
            ORDER BY date_photo DESC";

    // Préparation et exécution de la requête
    $sth = $dbh->prepare($sql);
    $sth->execute();

    // Récupération des résultats sous forme de tableau associatif
    $results = $sth->fetchAll(PDO::FETCH_ASSOC);

    // Retourner les résultats
    return $results;
}


// Fonction pour importer une photo dans la base de données
function importPhoto($auteur, $description, $date, $titre, $nomTemporaire) {
    // Connexion à la base de données
    $dbh = connect(); // Vous devrez implémenter cette fonction connect() pour obtenir une connexion à votre base de données

    // Suppression des espaces dans le titre
    $titrecompact = str_replace(' ', '', $titre);

    // Suppression des caractères spéciaux dans le nom de l'auteur
    $auteurcompact = str_replace(' ','',$auteur);

    // Chemin de stockage de l'image
    $chemin = 'public/media/images/'.$auteurcompact.$titrecompact.'.jpg';

    //Stockage de la photo
    move_uploaded_file($nomTemporaire,'../../'.$chemin);

    // Insertion des données de l'image dans la base de données
    $sql = "INSERT INTO photo (auteur_photo, description_photo, chemin_photo, date_photo, titre_photo) VALUES (?,?,?,?,?)";

    //Préparation de la requête
    $sth = $dbh->prepare($sql);

    //Execution de la requete
    $sth->execute(array($auteur, $description, $chemin, $date, $titre));
}
?>