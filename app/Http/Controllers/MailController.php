<?php

namespace App\Http\Controllers;

use App\Mail\Acceptance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
   public function sendMail(Request $request){
   
   
   Mail::to($request->email)->send(new Acceptance($request->name));
    return ['status'=>'successfully sent email'];
   }
}
