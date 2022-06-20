<?php
require 'debut_html.inc.php';
require 'menu.inc.php';
?>
<link rel="stylesheet" href="style.css">

<?php
if (!empty($_SESSION['erreur'])) {
    echo $_SESSION['erreur'];
    unset($_SESSION['erreur']);
}
// var_dump($_SESSION);
?>
<main class="form">
    <form method="post" action="connexion_verif.php" id="login-form" class="login-form" autocomplete="off" role="main">
        <h2>Connexion</h2>
        <div>
            <label class="label-email">
                <input type="email" class="text" name="mail" placeholder="Email" tabindex="1" required />
                <span class="required">Votre Email</span>
            </label>
        </div>
        <div>
            <label class="label-password">
                <input type="password" class="text" name="mdp" placeholder="Mot de passe" tabindex="2" required />
                <span class="required">Votre mot de passe</span>
            </label>
        </div>
        <input type="submit" value="Se connecter" />
        <div class="email">
            <a href="https://mmi21g09.mmi-troyes.fr/application/inscription.php">Pas encore inscrit ?</a>
        </div>

    </form>
</main>
<?php
require 'fin_html.inc.php';
?>