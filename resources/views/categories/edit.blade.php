@extends('layouts.app')

@section('content')
    <h1>Modifier Catégorie</h1>
    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label for="name">Nom de la catégorie</label>
        <input type="text" name="name" id="name" value="{{ $category->name }}" required>
        
        <button type="submit" class="btn btn-danger">Valider</button>
    </form>
@endsection
