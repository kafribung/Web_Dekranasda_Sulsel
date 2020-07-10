<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// Koment Activity
class Comment extends Model
{
    protected $touches = ['activity'];
    protected $guarded = ['created_at', 'updated_at'];
    
    // Relation many to one (Activity)
    public function activity()
    {
        return $this->belongsTo('App\Models\Activity');
    }
}
