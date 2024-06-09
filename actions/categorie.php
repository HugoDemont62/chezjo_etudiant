<?php
// Vérifiez si l'ID de la catégorie est fourni
if (isset($_GET['idCategorie'])) {
    $idCategorie = $_GET['idCategorie'];

    // Requête SQL pour récupérer tous les produits de la catégorie
    $query = $pdo->prepare('SELECT * FROM produit WHERE idCategorie = ?');
    $query->execute([$idCategorie]);

    // Récupération des produits sous forme de tableau associatif
    $produits = $query->fetchAll(PDO::FETCH_ASSOC);

    // Passer les produits à la vue
    echo $blade->make('categorie', ['produits' => $produits])->render();
} else {
    // Rediriger vers la page d'accueil si aucun ID de catégorie n'est fourni
    header('Location: index.php');
}
