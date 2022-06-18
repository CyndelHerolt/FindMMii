<?php
require 'debut_html.inc.php';
require 'menu.inc.php';
?>
<link rel="stylesheet" href="form.css">
<!-- <div id="contenu">
    <h1>Connexion</h1>
    <form action="connexion_verif.php" method="post">
        Adresse e-mail : <input type="text" name="email" /><br />
        Mot de passe : <input type="password" name="mdp" /><br />
        <input type="submit" value="Envoyer">
    </form>
</div> -->

<?php
if (!empty($_SESSION['erreur'])) {
    echo $_SESSION['erreur'];
    unset($_SESSION['erreur']);
}
// var_dump($_SESSION);
?>
<form method="post" action="connexion_verif.php" id="login-form" class="login-form" autocomplete="off" role="main">
    <img src="img/logo-test.png" alt="logo">
    <h1 class="a11y-hidden">Login Form</h1>
    <div>
        <label class="label-email">
            <input type="email" class="text" name="mail" placeholder="Email" tabindex="1" required />
            <span class="required">Votre Email</span>
        </label>
    </div>
    <input type="checkbox" name="show-password" class="show-password a11y-hidden" id="show-password" tabindex="3" />
    <label class="label-show-password" for="show-password">
        <span>Show Password</span>
    </label>
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
<?php
require 'fin_html.inc.php';
?>