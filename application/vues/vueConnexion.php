<?php
require('header.php');
?>
<!--Formulaires Pseudo + mots de passe -->
<section id='formulaire'>
    <h1>Se connecter</h1>
    <br>
    <form action='../controleurs/connexion.php' method='post'>
        <label for="pseudo">Nom d'utilisateur :</label>
        <input type="text" id="pseudo" name="pseudo"><br><br>
        <label for="pw">Mot de passe :</label>
        <input type="pw" id="pw" name="pw"><br><br>
        <input type="submit" value="Connexion" id='button1'>
    </form>
    <!--En cas d'erreur,dire le message d'erreur  -->
    <?php
    if (isset($_SESSION['error'])) {
        echo $_SESSION['error'];
        unset($_SESSION['error']);
    }
    ?>
</section>

<?php require('footer.php') ?>