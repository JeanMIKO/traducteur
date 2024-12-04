@extends('layouts.app')

@section('content')
    <header>
        <h1>Bienvenue sur notre Application Laravel</h1>
    </header>

    <nav>
        <ul>
            <li><a href="{{ route('categories.index') }}">Catégories</a></li>
            <li><a href="{{ route('articles.index') }}">Articles</a></li>
        </ul>
    </nav>

    <div class="container">
        <br><br>
        <p>Explorez les différentes catégories et articles dans l'application !</p>
    </div>

    
    
@endsection
