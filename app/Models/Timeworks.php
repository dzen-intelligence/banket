<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Timeworks extends Model
{
    protected $table='timeworks';

    public function hall()
    {
        return $this->hasOne(Halls::class, 'hall_id');
    }
}
