<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\TestEmail;

class ContactController extends Controller
{
    public function contact(){
        return view('contact');
    }

    public function mailSend(Request $request){
        $data=[
            'name'=>$request->name,
            'mail'=>$request->mail,
            'subject'=>$request->subject,
            'message'=>$request->message,
        ];
        Mail::to('1913010909@gmail.com')->send(new TestEmail($data));
        return "Enviadisimo";
    }
}
