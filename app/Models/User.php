<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'created_at', 'updated_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Relation one to many (MEMBER)
    public function members()
    {
        return $this->hasMany('App\Models\Member');
    }

    // Relation one to many (MEMBER)
    public function membersImgs()
    {
        return $this->hasMany('App\Models\MemberImg');
    }

    // Mutator
    public function getImgAttribute($value)
    {
        return url('img_users', $value);
    }
}