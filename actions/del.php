<?php

if (!isset($_GET['refPdt']))
    header('location: index.php?action=categories');

$refpdt = $_GET['refPdt'];

if (!isset($_SESSION['panier']) || !isset($_SESSION['panier'][$refpdt]))
    header('location: index.php?action=categories');

if ($_SESSION['panier'][$refpdt] == 1)
        unset($_SESSION['panier'][$refpdt]);
else
    $_SESSION['panier'][$refpdt]--;

header('location: index.php?action=panier');



?>
