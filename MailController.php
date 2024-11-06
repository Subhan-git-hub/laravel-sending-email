<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\EmailFile;

class MailController extends Controller
{
    public function sendEmail(){
        $email = 'xmuhammad.subhanx123@gmail.com';
         $maildata = [
            'name' => 'subhan',
            'email' => 'subhan@gmail.com',
         ];
        
        Mail::to($email)->cc('subhan@gmail.com')->send(new EmailFile($maildata));        
         dd($maildata);   
        }
}
