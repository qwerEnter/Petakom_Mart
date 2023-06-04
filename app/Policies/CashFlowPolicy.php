<?php

namespace App\Policies;

use App\Models\User;
use App\Models\CashFlow;
use Illuminate\Auth\Access\HandlesAuthorization;

class CashFlowPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the cashFlow can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the cashFlow can view the model.
     */
    public function view(User $user, CashFlow $model): bool
    {
        return true;
    }

    /**
     * Determine whether the cashFlow can create models.
     */
    public function create(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the cashFlow can update the model.
     */
    public function update(User $user, CashFlow $model): bool
    {
        return true;
    }

    /**
     * Determine whether the cashFlow can delete the model.
     */
    public function delete(User $user, CashFlow $model): bool
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
     * Determine whether the cashFlow can restore the model.
     */
    public function restore(User $user, CashFlow $model): bool
    {
        return false;
    }

    /**
     * Determine whether the cashFlow can permanently delete the model.
     */
    public function forceDelete(User $user, CashFlow $model): bool
    {
        return false;
    }
}
