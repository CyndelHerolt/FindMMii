<?php
require 'lib.inc.php';
error_reporting(E_ALL);
ini_set("display_errors", 1);

if (!empty($_POST['link'])) {

    $url = $_POST['link'];

    var_dump($url);
    $_SESSION['url'] = $url;
}

// echo var_dump($_SESSION['url']);
// echo '<br>';

$client_code_ = $_SESSION['id_client'];

$url_image = $_SESSION['url'];
// echo $client_code_;



$co = connexionBD();

ajouterimage($co, $client_code_, $url_image);

deconnexionBD($co);
