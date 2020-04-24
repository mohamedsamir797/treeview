<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    public $fillable = ['title','parent_id'];

    public function childs() {

        return $this->hasMany('App\Categorie','parent_id','id') ;

    }
}
