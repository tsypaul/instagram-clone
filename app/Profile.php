<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function profileImage()
    {
        return ($this->image) ? '/storage/' . $this->image : '/svg/nba.svg';
    }

    public function follower()
    {
        return $this->belongsToMany(User::class);
    }
}
