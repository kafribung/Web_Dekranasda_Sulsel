<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $touches = ['user'];
    protected $guarded = ['created_at', 'updated_at'];
    
    // Relation many to one (USER)
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    // Mutator
    public function getImgAttribute($value)
    {
        return url('img_members', $value);
    }
}
