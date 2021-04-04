<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

class MailController extends Controller
{
    public function sendEmail(){
        $details = [
            'Name' => 'Arman',
            'Surname' => 'Kaliakyn',
            'Email' => 'test@gmail.com'
        ];

        Mail::to("armankaliakyn@gmail.com")->send(new TestMail($details));
        return "Email send";
    }
}
