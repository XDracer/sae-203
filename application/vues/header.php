<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/global.css">
    <title>Site de concours photo</title>
    <script src="../../public/js/script.js" defer></script>
    <script src="../../public/js/form.js" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <!--Navigateur-->
        <nav id='nav'>
        <img id='logo' src="../../public/media/images/logo.png" />
            <a href="accueil.php">Accueil</a>
            <?php if (isset($_SESSION['pseudo'])) : ?>
                <a href="">Connecté en tant que <?php echo $_SESSION['pseudo']; ?></a>
                <a href="deconnexion.php">Se déconnecter</a>
                <a href="poster.php">Poster une photo</a>
            <?php else : ?>
                <a href="connexion.php">Se connecter</a>
                <a href="inscription.php">S'inscrire</a>
            <?php endif; ?>
        </nav>
    </header>
</body>

</html>