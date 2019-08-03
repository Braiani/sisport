<?php

namespace App;

use Illuminate\Notifications\Notifiable;

class User extends \TCG\Voyager\Models\User
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'siape', 'pessoa_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function setSettingsAttribute($value)
    {
        $this->attributes['settings'] = $value ? $value->toJson() : null;
    }

    public function isAdmin()
    {
        return $this->hasRole('Administrador');
    }

    public function isDirge()
    {
        return $this->hasRole('DIRGE');
    }

    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class);
    }
}
