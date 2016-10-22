<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'title_bg', 'title_en',  'content_bg', 'content_en', 'image_id'
    ];

    public function image(){
    	return $this->belongsTo(Image::class);
    }
}
