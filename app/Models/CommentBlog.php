<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CommentBlog extends Model
{
    protected $touches = ['blog'];
    protected $guarded = ['id', 'created_at', 'updated_at'];

    // Relation many to one (Blog)
    public function blog()
    {
        return $this->belongsTo('App\Models\Blog');
    }
}
