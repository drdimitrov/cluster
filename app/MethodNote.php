<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MethodNote extends Model
{
    protected $fillable = ['name', 'description', 'transition'];
}
