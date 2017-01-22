<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransitionGroups extends Model
{
    protected $fillable = ['name', 'part', 'folder'];

    public function transitions(){
    	return $this->hasMany(Transition::class, 'transition');
    }

    public function notes(){
    	return $this->hasMany(MethodNote::class, 'transition');
    }

    public function videos(){
    	return $this->hasMany(MethodVideo::class, 'transition');
    }

    public function toPart(){
        return $this->belongsTo(Part::class, 'part');
    }
}
