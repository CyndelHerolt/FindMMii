<!DOCTYPE html>
<html>

<head>
    <title>SAE202</title>
    <link rel="stylesheet" href="admin.css">
</head>


<body style="font-family:sans-serif;">
    <a href="index.php">Accueil</a> | <a href="profil.php">Profil</a>
    <hr />
    <h1>Supprimer un personnage</h1>
    <hr />
    <?php
    require 'lib.inc.php';

    $id = $_GET['num'];

    $co = connexionBD();
    effacerBD($co, $id);
    deconnexionBD($co);
    ?>
</body>

</html>