<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
    // Mutator
    public function getTakeImgAttribute()
    {
        return url('storage', $this->img);
    }
}
