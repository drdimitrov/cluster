<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'active', 'premium'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $admins = [
        'rossitsadd@gmail.com', 'info@nortiena.com',
    ];

    public function isAdmin(){
        return in_array($this->email, $this->admins);
    }

    public function activationToken(){
        return $this->hasOne(ActivationToken::class);
    }
}
