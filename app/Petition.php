<?php

namespace App;

class Petition extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function vote()
    {
        return $this->hasMany(Vote::class);
    }
}
