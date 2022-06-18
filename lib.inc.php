<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);

require 'secretmdp123xyz.php';

function connexionBD()
{
    $mabd = null;
    try {

        $mabd = new PDO('mysql:host=localhost;port=3306;
            dbname=application;charset=UTF8;', LUTILISATEUR, LEMOTDEPASSE);
        $mabd->query('SET NAMES utf8;');
    } catch (PDOException $e) {
        print "Erreur : " . $e->getMessage() . '<br />';
        die();
    }
    return $mabd;
}

function deconnexionBD(&$mabd)
{
    return $mabd = null;
}



// fonction d'ajout d'une BD dans la table bande_dessinees
function  ajouterBD(
    $mabd,
    $prenom,
    $nom,
    $tel,
    $naissance,
    $mail,
    $mdpcrypte
) {
    $req =
        'INSERT INTO clients ( client_prenom, client_nom, client_tel, client_date_naiss, client_email, client_mdp)     
        VALUES ("' . $prenom . '","' . $nom . '",' . $tel . ',"'
        . $naissance . '","' . $mail . '","' . $mdpcrypte . '")';
    // echo '<p>' . $req . '</p>' . "\n";
    try {
        $resultat = $mabd->query($req);
    } catch (PDOException $e) {
        // s'il y a une erreur, on l'affiche
        echo '<p>Erreur : ' . $e->getMessage() . '</p>';
        die();
    }
    if ($resultat->rowCount() == 1) {
        echo '<p>Bien joué ' . $prenom . ' vous avez créé votre compte profiter de sauvegarder vos personnages !</p>' . "\n";
    } else {
        echo '<p>Erreur lors de l\'ajout.</p>' . "\n";
        die();
    }
}




function ajouterimage($mabd, $client_code_, $url_image)
{
    $req =
        'INSERT INTO images ( client_code_, url_image)
         VALUES("' . $client_code_ . '", "' . $url_image . '")';
    try {
        $resultat = $mabd->query($req);
    } catch (PDOException $e) {
        // s'il y a une erreur, on l'affiche
        echo '<p>Erreur : ' . $e->getMessage() . '</p>';
        die();
    }
    if ($resultat->rowCount() == 1) {
        echo '<p>good</p>' . "\n";
    } else {
        echo '<p>Erreur lors de l\'ajout.</p>' . "\n";
        die();
    }
}


function afficherImage($mabd)
{
    $req = "SELECT * FROM clients INNER JOIN images ON clients.client_code = images.client_code_";

    $resultat = $mabd->query($req);


    foreach ($resultat as $value) {
        echo '<div class="list-item">';
        echo '<img src="' . $value['url_image'] . '" alt="' . 'Votre personnage' . '">';
        echo '</div>';
    }
}
