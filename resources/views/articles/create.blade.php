@extends('layouts.app')

@section('content')
    <h1>Ajouter des articles</h1>
    <form action="{{ route('articles.store') }}" method="POST">
        @csrf
        <label for="name">Nom</label>
        <input type="text" name="name" id="name" required>
        <label for="price">Prix</label>
        <input type="number" name="price" id="price" required>
        <label for="category_id">Categories</label>
        <select name="category_id" id="category_id">
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-danger">Enregistrer</button>
        @if ($errors->any())
            <ul style="color: red;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

    </form>
@endsection