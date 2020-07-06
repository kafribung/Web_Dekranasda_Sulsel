<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Auth;

class ProductImg extends Model
{
    protected $touches = ['user', 'product'];
    protected $guarded = ['created_at', 'updated_at'];
    
    // Relation many to one (USER)
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    // Relation many to one (USER)
    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }

    // isOwner
    public function isOwner()
    {
        $user = Auth::check();

        if ($user) {
            return Auth::user()->id == $this->user->id;
        } return false;
    }


    // Mutator
    public function getImgAttribute($value)
    {
        return url('img_products', $value);
    }
}
