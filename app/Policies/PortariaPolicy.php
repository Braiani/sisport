<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use TCG\Voyager\Policies\BasePolicy;
use App\Pessoa;

class PortariaPolicy extends BasePolicy
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
    
    public function visibilidade(User $user, $model)
    {
        $pessoaLogada = Pessoa::where('siape', $user->siape)->first();
        if ($pessoaLogada == null) {
            return !$model->visibilidade;
        }
        $current = false;
        foreach ($model->pessoas as $pessoa) {
            if ($pessoaLogada->id === $pessoa->id) {
                $current = true;
                break;
            }
        }
        return $current or !$model->visibilidade;
    }
    
    public function before($user, $ability)
    {
        if ($user->isAdmin() or $user->isDirge()) {
            return true;
        }
    }
}
