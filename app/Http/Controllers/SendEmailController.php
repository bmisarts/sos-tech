<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;

class SendEmailController extends Controller
{
    function sendemail(Request $request)
    {
     $this->validate($request, [
      'name'     =>  'required',
      'subject'     =>  'required',
      'email'  =>  'required|email',
      'message' =>  'required'
     ]);

        $data = array(
            'name'      =>  $request->name,
            'subject'      =>  $request->subject,
            'email'      =>  $request->email,
            'message'   =>   $request->message
        );

     Mail::to(env('MAIL_USERNAME'))->send(new Contact($data));
     return back()->with('success', 'Thanks for contacting us!');

    }
}
