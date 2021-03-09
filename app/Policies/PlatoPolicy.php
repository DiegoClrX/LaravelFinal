<?php

namespace App\Policies;

use App\Models\Plato;
use App\Models\Restaurante;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Auth;

class PlatoPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Plato  $plato
     * @return mixed
     */
    public function view(User $user, Plato $plato)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Plato  $plato
     * @return mixed
     */
    public function update(User $user, Plato $plato)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Plato  $plato
     * @return mixed
     */
    public function delete(Restaurante $restaurante, Plato $plato)
    {
        if(Auth::user()->role->role == 'admin'){
            return true;
        }else{
            return $restaurante->id == $plato->restaurante_id
            ? Response::allow()
            : Response::deny('You must be the right restaurant.');
        }


    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Plato  $plato
     * @return mixed
     */
    public function restore(User $user, Plato $plato)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Plato  $plato
     * @return mixed
     */
    public function forceDelete(User $user, Plato $plato)
    {
        //
    }
}
