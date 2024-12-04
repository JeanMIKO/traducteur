<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $table ='categories';

    protected $fillable = ['name']; //on précise les champs qu'on peut modifier ou remplir avec notre modèle
    //on peut aussi préciser les champs qu'on peut pas modifier
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
