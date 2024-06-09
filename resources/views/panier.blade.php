@extends('layouts.app')

@section('content')
    <div class="panier">
        @foreach($produits as $produit)
            <div class="produit">
                <h2>{{ $produit['nom'] }}</h2>
                <p>{{ $produit['description'] }}</p>
                <p>Prix : {{ $produit['prix'] }}€</p>
                <p>Quantité : {{ $produit['quantite'] }}</p>
            </div>
        @endforeach
    </div>
@endsection<?php
