<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Halls extends Model
{
    protected $fillable = [
        'title', 'description', 'type_id'
    ];

    public $timestamps = true;

    public function getWithTypes()
    {
        return DB::table('halls')
                ->join('types', 'halls.type_id', '=', 'types.id')
                ->get();
    }

    public function types()
    {
        return $this->hasOne(Types::class, 'id');
    }

    public function additions()
    {
        return $this->belongsToMany(Addition::class, 'addition_hall', 'hall_id');
    }

}
