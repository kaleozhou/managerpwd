<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class MypwdPolicy
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
    /**
     * Determine if the given user can delete the given mypwd.
     * @param User $user
     * @param Mypwd $mypwd
     * @return bool
     */
    public function delete(User $user, Mypwd $mypwd)
    {
        return $user->id === $mypwd->user_id;
    }
}
