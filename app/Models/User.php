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


    // Relation one to many (PRODUCT CATEGORY)
    public function product_categories()
    {
        return $this->hasMany('App\Models\ProductCategory');
    }

    // Relation one to many (PRODUCT)
    public function products()
    {
        return $this->hasMany('App\Models\Product');
    }

    // Relation one to many (PRODUCT IMG)
    public function productsImgs()
    {
        return $this->hasMany('App\Models\ProductImg');
    }

    // Relation one to many (ACTIVITY)
    public function activities()
    {
        return $this->hasMany('App\Models\Activity');
    }

    // Relation one to many (BLOG)
    public function blogs()
    {
        return $this->hasMany('App\Models\Blog');
    }

    // Mutator
    public function getTakeImgAttribute()
    {
        return url('storage', $this->img);
    }

    // Autorize King
    public function king()
    {
        return $this->email == 'admin@dekranasda.mks';
    }
}
