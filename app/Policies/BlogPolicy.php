<?php

namespace App\Policies;

use App\Models\{User, Blog};
use Illuminate\Auth\Access\HandlesAuthorization;

class BlogPolicy
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

    public function isOwner(User $user, Blog $blog)
    {
        return $user->id == $blog->user_id;
    }
}
