<?php

namespace App\Policies;

use App\Models\Animal;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class AnimalPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Animal $animal): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Animal $animal): bool
    {
        //
        return $user->id === $animal->user_id? 
        Response::allow()
        : Response::deny('You do not own this post.');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Animal $animal): bool
    {
        //
        return $user->id === $animal->user_id;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Animal $animal): bool
    {
        //
        return $user->id === $animal->user_id;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Animal $animal): bool
    {
        //
        return $user->id === $animal->user_id;
    }
}
