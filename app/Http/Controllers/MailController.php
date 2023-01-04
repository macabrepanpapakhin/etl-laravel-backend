<?php

namespace App\Http\Controllers;

use App\Mail\OrderShipped;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
   public function sendMail(Request $request){
   
   
   // Mail::to($request->email)->send(new OrderShipped($request->name));
    return ['status'=>'successfully sent email'];
   }
}
