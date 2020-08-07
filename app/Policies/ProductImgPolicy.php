<?php

namespace App\Policies;

use App\Models\{User, ProductImg};
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductImgPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function isOwner(User $user, ProductImg $productImg)
    {
        return $user->id == $productImg->user_id;
    }
}
