<?php
require 'debut_html.inc.php';
require 'menu.inc.php';
?>


<H3>Veuillez rentrer le code du parcours</H3>

<form action="runners.php" method="post">
    <p>Votre code <input type="number" name="code" /></p>
    <p><input type="submit" value="OK"></p>
</form>