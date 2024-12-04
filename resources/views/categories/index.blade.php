@extends('layouts.app')

@section('content')
    <h1>Categories</h1>
    <a href="{{ route('categories.create') }}" class="btn btn-primary">Ajouter une catégorie</a>
    <ul>
        
        @foreach($categories as $category)
            <li>{{ $category->name }} &nbsp; &nbsp; &nbsp; 
                <a href="{{ route('categories.edit', $category->id)}}" class="btn btn-primary">Modifier</a>
                <form action="{{ route('categories.destroy', $category->id)}}"  method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Voulez-vous vraiment cette catégorie?')">Supprimer</button>
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

