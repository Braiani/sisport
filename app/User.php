<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class User extends \TCG\Voyager\Models\User
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'siape'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function isAdmin()
    {
        $admin = false;
        foreach ($this->roles_all() as  $role) {
            if ($role->name === 'Administrador') {
                $admin = true;
                break;
            }
        }
        return $admin;
    }

    public function isDirge()
    {
        $dirge = false;
        foreach ($this->roles_all() as  $role) {
            if ($role->name === 'DIRGE') {
                $dirge = true;
                break;
            }
        }
        return $dirge;
    }
}
