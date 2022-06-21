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
    <h1 id="co_title"><span>Accède à</span> ton compte</h1>

    <div id="avatar_accueil">
        <img src="img/avatar2.png" alt="avatar d'accueil">
    </div>

    <form method="post" action="connexion_verif.php" id="login-form" class="login-form" autocomplete="off" role="main">
        <h2>Connexion</h2>
        <div>
            <label class="label-email">
                <span class="required">Votre Email</span>
                <input type="email" class="text" name="mail" placeholder="Email" tabindex="1" required />
            </label>
        </div>
        <div>
            <label class="label-password">
                <span class="required">Votre mot de passe</span>
                <input type="password" class="text" name="mdp" placeholder="Mot de passe" tabindex="2" required />
            </label>
        </div>
        <input class="valid" type="submit" value="Se connecter" /> <br>
            <a class="account" href="index.php">Pas encore inscrit ?</a>

    </form>
</main>
<?php
require 'fin_html.inc.php';
?>