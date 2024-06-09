@extends('layouts.app')

@section('content')
    <div class="categories">
        @foreach($categories as $categorie)
            <a href="index.php?action=categorie&idCategorie={{ $categorie['id'] }}" class="categorie">
                <img src="{{ $categorie['img_url'] }}" alt="{{ $categorie['nom'] }}">
                <h2>{{ $categorie['nom'] }}</h2>
            </a>
        @endforeach
    </div>
@endsection