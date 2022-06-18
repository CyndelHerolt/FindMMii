<?php
require 'debut_html.inc.php';
require 'menu.inc.php';
?>

<?php

$code = $_POST['code'];



switch ($code) {
    case 1000:
        echo "PARCOURS 1";
        break;
    case 1001:
        echo "PARCOURS 2";
        break;
    case 1002:
        echo "PARCOURS 3";
        break;
}
