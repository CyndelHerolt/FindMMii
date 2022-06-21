<?php
require 'debut_html.inc.php';
require 'menu.inc.php';
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

    $req = 'SELECT * FROM clients WHERE client_email LIKE "' . $mail . '"';
    // echo '<p>'.$req.'</p>';

    // on lance la requête
    $resultat = $co->query($req);

    // on calcule le nombre de lignes renvoyées
    $lignes_resultat = $resultat->rowCount();
    if ($lignes_resultat > 0) { // y a-t-il des résultats ?
        // oui : pour chaque résultat : afficher
        $ligne = $resultat->fetch(PDO::FETCH_ASSOC);
        if (password_verify($mdp, $ligne['client_mdp'])) {
            // echo '<p>OK... :)</p>';
            $_SESSION['id_client'] = $ligne['client_code'];
            $_SESSION['prenom_client'] = $ligne['client_prenom'];
            $_SESSION['nom_client'] = $ligne['client_nom'];
        } else {
            // echo '<p>KO... :(</p>';
            $_SESSION['erreur'] = '<h2 class="erreur">Le mot de passe saisi est incorrect.</h2>';
        }
    } else {
        // echo '<p>KO... :(</p>';
        $_SESSION['erreur'] = '<h2 class="erreur">>Désolé, le login saisi n\'existe pas !</h2>';
    }

    deconnexionBD($co);
    ?>

    <?php
    require 'fin_html.inc.php';
    ?>
</div>