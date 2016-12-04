<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActivationToken extends Model
{
    protected $fillable = ['token'];

    public function user(){
    	return $this->belongsTo(User::class);
    }

    public function getRouteKeyName(){
    	return 'token';
    }
}
