<?php
require 'debut_html.inc.php';
require 'menu.inc.php';
?>
<link rel="stylesheet" href="form.css">






<form method="post" action="inscription_validation.php" id="login-form" class="login-form" autocomplete="off" role="main">
    <img src="img/logo-test.png" alt="logo">
    <h1 class="a11y-hidden">Formulaire d'inscription</h1>
    <div>
        <label class="label-email">
            <input type="text" class="text" name="prenom" placeholder="Prénom" tabindex="1" required />
            <span class="required">Votre Prénom</span>
        </label>
    </div>
    <div>
        <label class="label-email">
            <input type="text" class="text" name="nom" placeholder="Nom" tabindex="1" required />
            <span class="required">Votre nom</span>
        </label>
    </div>

    <div>
        <label class="label-email">
            <input type="text" class="tel" name="tel" placeholder="........." tabindex="2" required />
            <span class="required">Numéro de téléphone</span>
        </label>
    </div>
    <div>
        <label class="label-email">
            <input type="date" class="text" name="naissance" tabindex="3" required />
            <span class="required">Date de naissance</span>
        </label>
    </div>

    <div>
        <label class="label-email">
            <input type="email" class="text" name="mail" placeholder="Email" tabindex="1" required />
            <span class="required">Votre Email</span>
        </label>
    </div>
    <div>
        <label class="label-password">
            <input type="text" class="text" name="mdp" placeholder="Mot de passe" tabindex="2" required />
            <span class="required">Votre mot de passe</span>
        </label>
    </div>
    <input type="submit" value="Créer le compte " />
    <div class="email">
        <a href="https://mmi21g09.mmi-troyes.fr/application/connexion.php">Déjà inscrit ?</a>
    </div>

</form>