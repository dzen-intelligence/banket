<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Types extends Model
{
    //
    protected $fillable = ['name'];

    public $timestamps = false;

    public function halls()
    {
        return $this->hasOne(Halls::class, 'type_id');
    }
}
