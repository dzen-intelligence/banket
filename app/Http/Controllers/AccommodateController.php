<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\User;

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

    public function step5()
    {
        return view('accommodate.step-5');
    }

    public function thanks()
    {
        return view('accommodate.thanks');
    }

    public function postStep2(Request $request)
    {
//        var_dump($request->all());

//        dd($request->all() );

        $user = User::create([
            'name' => 'aleksander',
            'phone' => '1234567891',
            'password' => \Hash::make('123456'),
        ]);


        return;

        $validateStep1 = $request->validate([
            'username' => 'required',
            'phone'  => 'required|numeric',
            'banket_name' => 'required',
            'hall_type' => 'required',
            'is_telegram' => 'nullable',
            'hall_address' => 'required',
            'state'  => 'required'
        ]);


        $this->storeInSession('step1', $validateStep1, $request);

        return redirect(route('accommodate.step3'));
    }

    public function postStep3(Request $request)
    {
        $validateStep2 = $request->validate([
            'person_price' => 'required|numeric',
            'hall_description' => 'required',
            'addition' => 'required',
            'preview_image' => 'required|file:mimes:jpeg,png'
        ]);

        $image = $request->file('preview_image');
        $filename = time().'.'.$image->getClientOriginalExtension();
        $image_path = $image->storeAs('/uploads/tmp', $filename);
        $image->move('/uploads/tmp', $filename);
        $validateStep2['preview_image'] = Str::lower($image_path);

//        var_dump($validateStep2);

        $this->storeInSession('step2', $validateStep2, $request);

        return redirect(route('accommodate.step4'));
    }

    public function postStep4(Request $request)
    {
        $validateStep3 = $request->validate([
            'title' => 'required',
            'persons' => 'required',
            'tiny_description' => 'required',
        ]);

//        var_dump($validateStep3);

        $this->storeInSession('step3', $validateStep3, $request);

        return redirect(route('accommodate.step5'));
    }

    public function postStep5(Request $request)
    {
        $validateStep4 = $request->validate([
            'monday' => 'required',
            'tuesday' => 'required',
            'wednesday' => 'required',
            'thursday' => 'required',
            'friday' => 'required',
            'saturday' => 'required',
            'sunday' => 'required',

            'contact_phone' => 'required|numeric',
            'contact_email' => 'required|email',
            'contact_site' => 'nullable',
            'contact_vk' => 'nullable',
            'contact_instagram' => 'nullable',
            'contact_manager' => 'nullable',
            'has_whatsapp' => 'nullable',
            'has_telegram' => 'nullable'
        ]);

//        var_dump($validateStep4);

        $this->storeInSession('step4', $validateStep4, $request);

        return redirect(route('accommodate.thanks'));
    }

    /**
     * @param Request $request
     * @param $validateStep1
     */
    public function storeInSession($key, $data, Request $request): void
    {
        if (!$request->session()->has($key)) {
            $request->session()->put([
                $key => $data
            ]);
        }

        if ($request->session()->has($key)) {
            $request->session()->remove($key);

            $request->session()->put([
                $key => $data
            ]);
        }
    }
}
