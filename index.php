<?php
require 'debut_html.inc.php';
require 'menu.inc.php';
?>
<main class="form">
    <h1> <span>Bienvenue sur</span> <br> FindMMii</h1>

    <div id="avatar_accueil">
    <img src="img/avatar1.png" alt="avatar d'accueil">
    </div>

    <form method="post" action="inscription_validation.php" id="login-form" class="login-form" autocomplete="off">
        <h2>Inscription</h2>
        <div id="noms">
            <label class="label-prenom">
                <span class="required">Prénom</span>
                <input type="text" class="text" name="prenom" placeholder="Prénom" tabindex="1" required />
            </label>
            <label class="label-nom">
                <span class="required">Nom</span>
                <input type="text" class="text" name="nom" placeholder="Nom" tabindex="1" required />
            </label>
        </div>
        <div id="email">
            <label class="label-email">
                <span class="required">Email</span>
                <input type="email" class="text" name="mail" placeholder="Email" tabindex="1" required />
            </label>
            <label class="label-password">
                <span class="required">Mot de passe</span>
                <input type="text" class="text" name="mdp" placeholder="Mot de passe" tabindex="2" required />
            </label>
        <input id="valid" type="submit" value="Valider" />
        <div>
            <a class="account" href="connexion.php">Tu as déjà un compte ? Connectes-toi</a>
        </div>

    </form>

</main>

</body>
</html>