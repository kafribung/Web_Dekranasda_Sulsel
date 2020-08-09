<?php

namespace App\Models;

use Auth;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use Searchable;
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
}
