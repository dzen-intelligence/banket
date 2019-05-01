<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccommodateController extends Controller
{


    public function step1()
    {
        return view('accommodate.step-1');
    }

    public function step2()
    {
        return view('accommodate.step-2');
    }

    public function step3()
    {
        return view('accommodate.step-3');
    }

    public function step4()
    {
        return view('accommodate.step-4');
    }
}
