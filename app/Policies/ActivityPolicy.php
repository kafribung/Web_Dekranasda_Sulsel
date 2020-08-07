<?php

namespace App\Policies;

use App\Models\{User,  Activity};
use Illuminate\Auth\Access\HandlesAuthorization;

class ActivityPolicy
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

    public function isOwner(User $user, Activity $activity)
    {
        return $user->id == $activity->user_id;
    }
}
