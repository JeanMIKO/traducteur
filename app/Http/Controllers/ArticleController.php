<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
   
    public function index()
    {
        $articles = Article::with('category')->get();
        return view('articles.index', compact('articles'));
    }
    public function create()
    {
        $categories = Category::all();
        //dd($categories); //permet d'afficher le contenu d'une variable
        return view('articles.create', compact('categories'));
    }

    public function store(Request $request)
    {
        dd($request);
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'category_id' => 'required|exists:categories,id',
        ]);
        Article::create($request->all());
        return redirect()->route('articles.index');
       
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        $categories = Category::all();
        return view('articles.edit', compact('article', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'category_id'=> 'required|exists:categories,id',
        ]);
        $article = Article::findOrFail($id);
        $article->update($request->all());
        return redirect()->route('articles.index');
    }

    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();
        return redirect()->route('articles.index');
    }
}
