<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Creativeorange\Gravatar\Facades\Gravatar;

class User extends Authenticatable
{

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'avatar'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Al establecer un email se obtiene un url para el avatar.
     *
     * @param type $email
     */
    public function setEmailAttribute($email)
    {
        if (empty($this->attributes['avatar'])) {
            $this->attributes['avatar'] = Gravatar::get($email);
        }
        $this->attributes['email'] = strtolower($email);
    }
}
