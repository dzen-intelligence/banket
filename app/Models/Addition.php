<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Addition extends Model
{
    //

    public function halls()
    {
        return $this->belongsToMany(Halls::class, 'addition_hall', 'addition_id');
    }
}
