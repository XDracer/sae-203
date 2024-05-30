<?php
session_start();
require('../modeles/photos.php');

// Récupération de la liste des photos récemment ajoutées
$listePhotos = obtenirPhotos('../modeles/photos.php');

// La variable $listePhotos est maintenant disponible et peut être utilisée dans la vue vueAccueil.php
require('../vues/vueAccueil.php');
