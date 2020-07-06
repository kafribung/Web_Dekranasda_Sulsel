<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Product extends Model
{
    protected $touches = ['user'];
    protected $guarded = ['created_at', 'updated_at'];

    // Relation many to one (USER)
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    // Relation many to one (MEMBER)
    public function member()
    {
        return $this->belongsTo('App\Models\Member');
    }

    // Relation many to one (MEMBER)
    public function product_category()
    {
        return $this->belongsTo('App\Models\ProductCategory');
    }

     // Relation one to many (PRODUCT IMG)
     public function productsImgs()
     {
         return $this->hasMany('App\Models\ProductImg');
     }

     // isOwner
    public function isOwner()
    {
        $user = Auth::check();

        if ($user) {
            return Auth::user()->id == $this->user_id;
        } return false;
    }

    
}
