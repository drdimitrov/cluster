<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    public function type(){
    	return $this->belongsTo(Type::class);
    }

    public function  trnsitionGroups(){
    	return $this->hasMany(TransitionGroups::class, 'part');
    }
}
