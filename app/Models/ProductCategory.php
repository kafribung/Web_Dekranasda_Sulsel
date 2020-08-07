<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Auth;

class ProductCategory extends Model
{
    protected $touches = ['user'];
    protected $fillable = ['name'];

    // Relation many to one (USER)
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    // Relation one to many (PRODUCT)
    public function products()
    {
        return $this->hasMany('App\Models\Product');
    }
}
