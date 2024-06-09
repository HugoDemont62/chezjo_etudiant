@extends('layouts.app')

@section('content')
    <div class="produits">
        @foreach($produits as $produit)
            <div class="produit">
                <h2>{{ $produit['nom'] }}</h2>
                <p>{{ $produit['description'] }}</p>
                <p>Prix : {{ $produit['prix'] }}€</p>
                <a href="index.php?action=add&refPdt={{ $produit['id'] }}" class="btn">Ajouter au panier</a>
            </div>
        @endforeach
    </div>
@endsection