@extends('layouts.app')

@section('content')
    <h1>Articles</h1>
    <a href="{{ route('articles.create') }}" class="btn btn-primary">Ajouter un article</a>
    <ul>
        @foreach($articles as $article)
            <li>
                Nom: {{ $article->name }} / Categorie: {{ $article->category->name }} &nbsp; &nbsp; &nbsp;
                <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-primary">Modifier</a>
                <form action="{{ route('articles.destroy', $article->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Voulez-vous vraiment ce article?')">Supprimer</button>
                </form>
            </li>
        @endforeach
    </ul>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    @if(session('error'))
        <p style="color: red;">{{ session('error') }}</p>
    @endif

@endsection