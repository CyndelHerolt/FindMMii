<?php
require 'debut_html.inc.php';
require 'menu.inc.php';
?>

<?php

$code = $_POST['code'];

switch ($code) {
    case 1000:
        echo "<section class='parcours'>
    <div class='parcours_titre'>
        <h1>FindMMii</h1>
        <h2>Parcours n°1</h2>
    </div>
        <h3>Retrouvez les MMii !</h3>
        <article>
        <h4>Les règles</h4>
        <p>Vous avez 1h pour retrouver les MMii représentés sur cette fiche. <br> <hr>
         Vous trouverez sur la fiche :</p>
         <ol>
         <li>Un guide des lieux où chercher vos MMii.</li>
         <li>20 vignettes de MMii parmi ceux cachés dans l'IUT. Ce sont ceux-là que vous devez retrouver !</li>
         <li>Un plan de l'IUT.</li>
</ol>
    </article>
    <article>
    <h4>Comment jouer ?</h4>
    <p>Retrouvez les MMii représentés sur la fiche et prenez-les en photo avec votre téléphone. <br> <hr>
    Les photos prises vous serviront de preuves pour comptabiliser les points à la fin de la partie avec un
    animateur.</p>
</article>
<article>
<h4>Les points</h4>
<p>Certains MMii sont très bien cachés, d'autres sont plus faciles à trouver.
Chaque MMii trouvé et capturé en photo rapporte un certain nombre de points en fonction de la difficulté
de sa cachette. C'est la couleur du contour qui détermine la valeur de chaque MMii !</p> <hr>
<div class='rules'>
<div class='points'>
<img class='point1' src='img/avatar2.png' alt='aperçu avatar'>
<figcaption>1 point</figcaption>
</div>
<div class='points'>
<img class='point2' src='img/avatar2.png' alt='aperçu avatar'>
<figcaption>2 points</figcaption>
</div>
<div class='points'>
<img class='point3' src='img/avatar2.png' alt='aperçu avatar'>
<figcaption>3 points</figcaption>
</div>
</div>
</article>
<h3>Vos MMii</h3>
</section>";

        break;
    case 1001:
        echo "<section class='parcours'>
    <div class='parcours_titre'>
        <h1>FindMMii</h1>
        <h2>Parcours n°2</h2>
    </div>
        <h3>Retrouvez les MMii !</h3>
        <article>
        <h4>Les règles</h4>
        <p>Vous avez 1h pour retrouver les MMii représentés sur cette fiche. <br> <hr>
         Vous trouverez sur la fiche :</p>
         <ol>
         <li>Un guide des lieux où chercher vos MMii.</li>
         <li>20 vignettes de MMii parmi ceux cachés dans l'IUT. Ce sont ceux-là que vous devez retrouver !</li>
         <li>Un plan de l'IUT.</li>
</ol>
    </article>
    <article>
    <h4>Comment jouer ?</h4>
    <p>Retrouvez les MMii représentés sur la fiche et prenez-les en photo avec votre téléphone. <br> <hr>
    Les photos prises vous serviront de preuves pour comptabiliser les points à la fin de la partie avec un
    animateur.</p>
</article>
<article>
<h4>Les points</h4>
<p>Certains MMii sont très bien cachés, d'autres sont plus faciles à trouver.
Chaque MMii trouvé et capturé en photo rapporte un certain nombre de points en fonction de la difficulté
de sa cachette. C'est la couleur du contour qui détermine la valeur de chaque MMii !</p> <hr>
<div class='rules'>
<div class='points'>
<img class='point1' src='img/avatar2.png' alt='aperçu avatar'>
<figcaption>1 point</figcaption>
</div>
<div class='points'>
<img class='point2' src='img/avatar2.png' alt='aperçu avatar'>
<figcaption>2 points</figcaption>
</div>
<div class='points'>
<img class='point3' src='img/avatar2.png' alt='aperçu avatar'>
<figcaption>3 points</figcaption>
</div>
</div>
</article>
<h3>Vos MMii</h3>
</section>";
        break;
    case 1002:
        echo "<section class='parcours'>
    <div class='parcours_titre'>
        <h1>FindMMii</h1>
        <h2>Parcours n°3</h2>
    </div>
        <h3>Retrouvez les MMii !</h3>
        <article>
        <h4>Les règles</h4>
        <p>Vous avez 1h pour retrouver les MMii représentés sur cette fiche. <br> <hr>
         Vous trouverez sur la fiche :</p>
         <ol>
         <li>Un guide des lieux où chercher vos MMii.</li>
         <li>20 vignettes de MMii parmi ceux cachés dans l'IUT. Ce sont ceux-là que vous devez retrouver !</li>
         <li>Un plan de l'IUT.</li>
</ol>
    </article>
    <article>
    <h4>Comment jouer ?</h4>
    <p>Retrouvez les MMii représentés sur la fiche et prenez-les en photo avec votre téléphone. <br> <hr>
    Les photos prises vous serviront de preuves pour comptabiliser les points à la fin de la partie avec un
    animateur.</p>
</article>
<article>
<h4>Les points</h4>
<p>Certains MMii sont très bien cachés, d'autres sont plus faciles à trouver.
Chaque MMii trouvé et capturé en photo rapporte un certain nombre de points en fonction de la difficulté
de sa cachette. C'est la couleur du contour qui détermine la valeur de chaque MMii !</p> <hr>
<div class='rules'>
<div class='points'>
<img class='point1' src='img/avatar2.png' alt='aperçu avatar'>
<figcaption>1 point</figcaption>
</div>
<div class='points'>
<img class='point2' src='img/avatar2.png' alt='aperçu avatar'>
<figcaption>2 points</figcaption>
</div>
<div class='points'>
<img class='point3' src='img/avatar2.png' alt='aperçu avatar'>
<figcaption>3 points</figcaption>
</div>
</div>
</article>
<h3>Vos MMii</h3>
</section>";
        break;
}
