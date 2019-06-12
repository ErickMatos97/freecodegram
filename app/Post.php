<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    Public function user()
    {
        return $this->belongsTo(user::class);
    }
}
