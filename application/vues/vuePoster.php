
<?php
require('header.php');
?>
<section id='formulaire'>
<h2>Poster photo</h2>
    <form action="poster.php" method="POST" enctype="multipart/form-data">

    <div>
        <label for="photo">Choisir une photo :</label>
        <input type="file" name="photo" id="photo" accept="image/jpeg">
    </div>
<br>
    <div>
        <label for="titre">Titre :</label>
        <input type="text" name="titre" id="titre" required>
    </div>
<br>
    <div>
        <label for="description">Description :</label>
        <input type="text" name="description" id="description" required></label>
    </div>
<br>
    <div>
        <button type="submit">Envoyez</label>
    </div>
    </form>
    </section>
    <br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php
require('footer.php');
?>