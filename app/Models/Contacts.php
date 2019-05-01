<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    protected $table='hall_contacts';

    public function hall()
    {
        return $this->hasOne(Halls::class, 'hall_id');
    }

}
