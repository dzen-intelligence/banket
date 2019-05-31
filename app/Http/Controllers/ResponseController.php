<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResponseController extends Controller
{

    public function store(Request $request)
    {
        var_dump($request->all());

        $this->validate($request, [
            'name' => 'required',
            'rating' => 'required',
            'phone' => 'required',
            'review' => 'required'
        ]);


    }
}
