<?php

namespace App;

class Vote extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function petition()
    {
        return $this->belongsTo(Petition::class);
    }
}
