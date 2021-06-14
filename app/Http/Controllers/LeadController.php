<?php

namespace App\Http\Controllers;

use App\Mail\MessageSubmitted;
use Illuminate\Http\Request;
use App\Models\Lead;
use Illuminate\Support\Facades\Mail;

class LeadController extends Controller
{

    public function store(Request $request)
    {

        if (request()->getMethod() == 'POST') {
            $rules = [
                'captcha' => 'required|captcha',
                'name'=>'required',
                'email'=>'required|email',   
            ];

            $validator = validator()->make(request()->all(), $rules);
            if ($validator->fails()) {
                return redirect(url()->previous().'#contact')->with('status', 'Invalid captcha!');
            } else {


                $single = new Lead;

                $single->name = $request->name;
                $single->message = $request->message;
                $single->website = $request->website;
                $single->company = $request->company;
                $single->email = $request->email;
                
                
                Mail::to('info@naiassolutions.com')->send(new MessageSubmitted($single));
                // Mail::to('goglichidze.mike@gmail.com')->send(new MessageSubmitted($single));
                
                return redirect(url()->previous().'#contact')->with('message', 'Your message was successfully sent!');
            }
        }
    }


    public function reloadCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }
}
