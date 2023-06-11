<?php

namespace App\Policies;

use App\Models\User;
use App\Models\MeetupPoint;
use Illuminate\Auth\Access\HandlesAuthorization;

class MeetupPointPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the meetupPoint can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the meetupPoint can view the model.
     */
    public function view(User $user, MeetupPoint $model): bool
    {
        return true;
    }

    /**
     * Determine whether the meetupPoint can create models.
     */
    public function create(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the meetupPoint can update the model.
     */
    public function update(User $user, MeetupPoint $model): bool
    {
        return true;
    }

    /**
     * Determine whether the meetupPoint can delete the model.
     */
    public function delete(User $user, MeetupPoint $model): bool
    {
        return true;
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     */
    public function deleteAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the meetupPoint can restore the model.
     */
    public function restore(User $user, MeetupPoint $model): bool
    {
        return false;
    }

    /**
     * Determine whether the meetupPoint can permanently delete the model.
     */
    public function forceDelete(User $user, MeetupPoint $model): bool
    {
        return false;
    }
}
