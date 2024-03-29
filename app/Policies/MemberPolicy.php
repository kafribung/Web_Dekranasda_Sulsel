<?php

namespace App\Policies;

use App\Models\{User, Member};
use Illuminate\Auth\Access\HandlesAuthorization;

class MemberPolicy
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

    public function isOwner(User $user, Member $member)
    {
        return $user->id == $member->user_id;
    }
}
