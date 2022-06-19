<?php
require 'debut_html.inc.php';
require 'menu.inc.php';
header('location: avatar_editor.php');
?>
<div class="validation">
    <?php

    $prenom = strtolower(ucfirst($_POST['prenom']));
    $nom = strtoupper($_POST['nom']);
    $mail = $_POST['mail'];
    $mdp = $_POST['mdp'];

    $mdpcrypte = crypt($mdp, '$6$rounds=5000$usesomesillystringforsalt$');


    // var_dump($_POST);
    // var_dump($_FILES);


    $co = connexionBD();
    ajouterBD(
        $co,
        $prenom,
        $nom,
        $mail,
        $mdpcrypte
    );
    deconnexionBD($co);
    ?>

    <?php
    require 'fin_html.inc.php';
    ?>
</div>