<?php

namespace App\Policies;

use App\Models\{User, Product};
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductPolicy
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
    public function isOwner(User $user, Product $product)
    {
        return $user->id == $product->user_id;
    }
}
