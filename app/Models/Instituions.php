<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Instituions extends Model
{
    public $timestamps = false;

    protected $fillable = ['name'];


    public function halls()
    {
        return $this->hasMany('App\Models\Halls');
    }
}
