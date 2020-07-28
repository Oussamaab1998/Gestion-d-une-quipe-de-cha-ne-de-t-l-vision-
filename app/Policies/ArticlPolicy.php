<?php

namespace App\Policies;

use App\User;
use App\Articl;
use Illuminate\Auth\Access\HandlesAuthorization;

class ArticlPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the articls.
     *
     * @param  \App\User  $user
     * @param  \App\Articls  $articls
     * @return mixed
     */
    public function view(User $user, Articls $articls)
    {
        return true;
    }

    /**
     * Determine whether the user can create articls.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can update the articls.
     *
     * @param  \App\User  $user
     * @param  \App\Articl  $articls
     * @return mixed
     */
    public function update(User $user, Articl $articls)
    {
        return $user->id === $articls->user_id;
    }

    /**
     * Determine whether the user can delete the articls.
     *
     * @param  \App\User  $user
     * @param  \App\Articls  $articls
     * @return mixed
     */
    public function delete(User $user, Articl $articls)
    {
        return $user->id === $articls->user_id;
    }
}
