<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;


// @foreach($categories as $category) veut dire qu'on prend les données à l'intérieur de $categories et qu'on les stockes dans la variable $categorie
//$categories = Category::orderBy('variable', 'ASC/DESC')->get(); permet d'ordonner

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');

    }

    public function store(Request $request)
    {
        dd($request);
        $request->validate(['name' => 'required']);//Ici le 'name' c'est le nom de l'attribut name du input de Nom
        Category::create($request->all());
        return redirect()->route('categories.index');
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate(['name' => 'required']);
        $category = Category::findOrFail($id);
        $category->update($request->all());
        return redirect()->route('categories.index');
    }

    

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->route('categories.index');
    }

}
