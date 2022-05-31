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
    public function send(Request $request){
        $correo = new TestEmail($request->all());
        Mail::to('1913010909@untels.edu.pe')->send($correo);
        return "Hola";
    }
}
