<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Shift;
use Illuminate\Auth\Access\HandlesAuthorization;

class ShiftPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the shift can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the shift can view the model.
     */
    public function view(User $user, Shift $model): bool
    {
        return true;
    }

    /**
     * Determine whether the shift can create models.
     */
    public function create(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the shift can update the model.
     */
    public function update(User $user, Shift $model): bool
    {
        return true;
    }

    /**
     * Determine whether the shift can delete the model.
     */
    public function delete(User $user, Shift $model): bool
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
     * Determine whether the shift can restore the model.
     */
    public function restore(User $user, Shift $model): bool
    {
        return false;
    }

    /**
     * Determine whether the shift can permanently delete the model.
     */
    public function forceDelete(User $user, Shift $model): bool
    {
        return false;
    }
}
