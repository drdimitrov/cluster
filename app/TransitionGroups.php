<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransitionGroups extends Model
{
    protected $fillable = ['name'];

    public function transitions(){
    	return $this->hasMany(Transition::class, 'transition');
    }

    public function notes(){
    	return $this->hasMany(MethodNote::class, 'transition');
    }

    public function videos(){
    	return $this->hasMany(MethodVideo::class, 'transition');
    }
}
