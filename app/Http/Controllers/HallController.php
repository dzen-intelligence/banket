<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HallController extends Controller
{

    public function lists()
    {
        return view('halls.lists');
    }
}
