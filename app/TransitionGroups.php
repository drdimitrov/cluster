<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransitionGroups extends Model
{
    protected $fillable = ['name'];

    public function transitions(){
    	return $this->hasMany(Transition::class);
    }
}
