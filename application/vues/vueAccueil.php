<?php
require('header.php');
?>
<!-- A compléter ici -->

<main>
    <div class="block">
        <h1>Site de concours photos</h1>
        <p>Le site 'Concours Photos' est une plateforme dédiée aux passionnés de photographie. Organisé régulièrement, ce concours permet aux participants de soumettre leurs plus belles créations et de les faire évaluer par un jury d'experts. Les gagnants se voient récompensés par de superbes prix, tandis que tous les participants peuvent découvrir les clichés primés et s'inspirer pour leurs prochaines réalisations. Que vous soyez amateur ou professionnel, ce concours vous offre l'opportunité de faire briller votre talent et de partager votre vision artistique avec une communauté de passionnés."
            J'ai essayé de résumer les principaux éléments d'un site de concours photos, en mettant l'accent sur l'organisation régulière du concours, la possibilité de soumettre ses photos, l'évaluation par un jury, les récompenses pour les gagnants, et la possibilité pour tous les participants de découvrir les clichés primés.</p>
    </div>
    <!-- ajouter l'ensemble des photos présentes dans la variable $listePhotos -->
    <section>
        <!--le début d'une boucle foreach qui itère sur chaque élément du tableau-->
        <?php
        foreach ($listePhotos as $photo) {
        ?>
            <article>
                <!--affiche une image. L'attribut src contient le chemin d'accès à l'image-->
                <img src="<?= '../../' . $photo['chemin_photo'] ?>" alt="<?= $photo['titre_photo'] ?>">
                <!--affiche le text grace a un echotag-->
                <h3><?= $photo['titre_photo'] ?></h3>
                <p><?= $photo['date_photo'] ?></p>
                <p><?= $photo['description_photo'] ?></p>
                <?php if (isset($_SESSION['pseudo'])) : ?>
                    <div class="etoiles"></div>
                    <div class="etoiles"></div>
                    <div class="etoiles"></div>
                    <div class="etoiles"></div>
                    <div class="etoiles"></div>
                <?php else : ?>
                <?php endif; ?>
                </nav>
            </article>
        <?php
        }
        ?>
</main>


<?php require('footer.php') ?>