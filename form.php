<?php
require 'debut_html.inc.php';
require 'menu.inc.php';
?>

<main class="code_parcours">
<h1><span>Veuillez saisir</span> le code du parcours</h1>

<form action="runners.php" method="post">
    <p>Votre code <input type="number" name="code" /></p>
    <p><input type="submit" value="OK"></p>
</form>
</main>