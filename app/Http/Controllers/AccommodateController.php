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

    public function postStep2(Request $request)
    {
//        var_dump($request->all());

        $validateStep1 = $request->validate([
            'username' => 'required',
            'phone'  => 'required|numeric',
            'banket_name' => 'required',
            'hall_type' => 'required',
            'is_telegram' => 'accepted',
            'hall_address' => 'required',
            'state'  => 'required'
        ]);

        if(!$request->session()->has('step1')) {
            $request->session()->put([
                'step1' => $validateStep1
            ]);
        }

        if($request->session()->has('step1')) {
            $request->session()->remove('step1');

            $request->session()->put([
                'step1' => $validateStep1
            ]);
        }

        return redirect(route('accommodate.step3'));
    }

    public function postStep3(Request $request)
    {
        var_dump($request->all());
    }

    public function postStep4(Request $request)
    {
        var_dump($request);
    }
}
