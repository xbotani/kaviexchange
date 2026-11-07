<?php

namespace App\Policies;

use App\Models\Currency;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class CurrencyPolicy
{

    public function viewAny(User $user): bool
    {
        return false;
    }

    public function view(User $user, Currency $currency): bool
    {
        return false;
    }

    public function create(User $user): bool
    {
        return false;
    }

    public function update(User $user, Currency $currency): bool
    {
        return false;
    }

    public function delete(User $user, Currency $currency): bool
    {
        return false;
    }

    public function restore(User $user, Currency $currency): bool
    {
        return false;
    }

    public function forceDelete(User $user, Currency $currency): bool
    {
        return false;
    }
}
