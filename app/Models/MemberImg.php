<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Auth;

class MemberImg extends Model
{
    protected $touches = ['user', 'member'];
    protected $guarded = ['created_at', 'updated_at'];

    // Relation many to one (USER)
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    // Relation many to one (USER)
    public function member()
    {
        return $this->belongsTo('App\Models\Member');
    }

    // Mutator IMG
    public function getTakeImgAttribute()
    {
        return url('storage', $this->img);
    }
}
