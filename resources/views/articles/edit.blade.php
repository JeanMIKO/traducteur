@extends('layouts.app')

@section('content')
    <h1>Modifier article</h1>
    <form action="{{ route('articles.update', $article->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label for="name">Nom</label>
        <input type="text" name="name" id="name" value="{{ $article->name }}" required>
        
        <label for="price">Prix</label>
        <input type="number" name="price" id="price" value="{{ $article->price }}" required>
        
        <label for="category_id">Categorie</label>
        <select name="category_id" id="category_id" required>
            @foreach($categories as $category)
                <option value="{{ $category->id }}" 
                    {{ $article->category_id == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
        
        <button type="submit" class="btn btn-danger">Valider</button>
    </form>
@endsection
