<?php

if (!isset($_SESSION['panier']))
    $_SESSION['panier'] = [];

if (isset($_GET['refPdt'])) {
    $refpdt = $_GET['refPdt'];
    $sql = "select * from produit where id=?";
    $q = $pdo->prepare($sql);
    $q->execute([$refpdt]);
    $produit = $q->fetch();
    
    if ($produit) {
        if (isset($_SESSION['panier'][$refpdt]))
            $_SESSION['panier'][$refpdt]++;
        else
            $_SESSION['panier'][$refpdt]=1;
    }
}

header('location: index.php?action=panier');

