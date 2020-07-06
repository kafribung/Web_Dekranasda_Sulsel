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

    // isOwner
    public function isOwner()
    {
        $user = Auth::check();

        if ($user)
            return Auth::user()->id == $this->user_id;
        return false;
    }
}
