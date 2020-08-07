<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $touches = ['user'];
    protected $guarded = ['created_at', 'updated_at'];

    // Relation many to one (USER)
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    // Relation  one to  many (COMMENT)
    public function comments()
    {
        return $this->hasMany('App\Models\CommentActivity');
    }

    // Mutator
    public function getTakeImgAttribute()
    {
        return url('storage', $this->img);
    }
}
