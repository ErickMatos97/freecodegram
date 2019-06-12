<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded =[];

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/jlf03iA7c7t3YHKMA2DPWCGROxHSyAcnrf7hlakv.png';
        return '/storage/' . $imagePath;
    }


    Public function user()
    {
        return $this->belongsTo(user::class);
    }
}
