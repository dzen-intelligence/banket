<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Responses extends Model
{

    public function hall() {
        return $this->belongsTo(Halls::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id', 'id');
    }
}
