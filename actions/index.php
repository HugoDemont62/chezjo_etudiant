<?php
// Requête SQL pour récupérer toutes les catégories
$query = $pdo->query('SELECT * FROM categorie');
$categories = $query->fetchAll();

// Passer les catégories à la vue
echo $blade->make("index", ["categories" => $categories])->render();
