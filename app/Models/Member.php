<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Member extends Model
{
    protected $touches = ['user'];
    protected $guarded = ['created_at', 'updated_at'];
    
    // Relation many to one (USER)
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    // Relation one to many (MEMBER)
    public function membersImgs()
    {
        return $this->hasMany('App\Models\MemberImg');
    }

    // isOwner
    public function isOwner()
    {
        $user = Auth::check();

        if ($user) {
            return Auth::user()->id == $this->user->id;
        } return false;
    }

    
}
