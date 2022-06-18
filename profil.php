<?php
require 'debut_html.inc.php';
require 'menu.inc.php';


?>

<main class="listing">

    <h1>Voici tous les personnages que vous avez sauvegardés</h1>

    <section class="list-container">


        <?php
        $co = connexionBD();
        afficherImage($co);
        deconnexionBD($co);
        ?>
    </section>
</main>