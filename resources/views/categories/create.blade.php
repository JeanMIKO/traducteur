@extends('layouts.app')

@section('content')
    <h1>Ajouter des catégories</h1>
    <form action="{{ route('categories.store')}}" method="POST"> <!-- action="{route('nom de la route qui va gérer les actions')}" -->
        @csrf
        <label for="name">Nom de la catégorie</label>
        <input type="text" name="name" id="name" required>
        <button type="submit" class="btn btn-danger">Valider</button>

        @if ($errors->any())
            <ul style="color: red;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </form>
@endsection
 