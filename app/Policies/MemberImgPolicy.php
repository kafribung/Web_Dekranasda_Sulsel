<?php

namespace App\Policies;

use App\Models\{User, MemberImg};
use Illuminate\Auth\Access\HandlesAuthorization;

class MemberImgPolicy
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

    public function isOwner(User $user, MemberImg $memberImg)
    {
        return $user->id == $memberImg->user_id;
    }
}
