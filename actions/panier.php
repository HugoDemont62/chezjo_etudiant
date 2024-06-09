<?php
// Vérifiez si le panier existe, sinon, initialisez-le
if (!isset($_SESSION['panier'])) {
    $_SESSION['panier'] = [];
}

$produits = [];

// Pour chaque produit dans le panier
foreach ($_SESSION['panier'] as $idProduit => $quantite) {
    // Requête SQL pour récupérer les informations du produit
    $query = $pdo->prepare('SELECT * FROM produit WHERE id = ?');
    $query->execute([$idProduit]);

    // Récupération du produit sous forme de tableau associatif
    $produit = $query->fetch(PDO::FETCH_ASSOC);

    // Ajoutez la quantité au produit
    $produit['quantite'] = $quantite;

    // Ajoutez le produit à la liste des produits
    $produits[] = $produit;
}

// Passer les produits à la vue
echo $blade->make('panier', ['produits' => $produits])->render();
