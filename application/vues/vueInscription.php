<?php
require('header.php');
?>
<!--Formulaires Pseudo + mots de passe -->
<section id='formulaire'>
    <h1>S'inscrire</h1>
    <br>
    <form action='../controleurs/inscription.php' method='post'>
        <label for="pseudo">Nom d'utilisateur :</label>
        <input type="text" id="pseudo" name="pseudo"><br><br>
        <label for="email">Adresse email :</label>
        <input type="email" id="email" name="email"><br><br>
        <label for="pw">Mot de passe :</label>
        <input type="pw" id="pw" name="pw"><br><br>
        <input type="submit" name='login' value="S'inscrire">
    </form>
</section>
<?php require('footer.php') ?>