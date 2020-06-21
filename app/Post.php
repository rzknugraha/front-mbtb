<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post';

    public function category()
    {
        return $this->belongsTo('App\Category','category','id');
    }
}
