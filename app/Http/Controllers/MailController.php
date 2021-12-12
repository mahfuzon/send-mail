<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Log;

class MailController extends Controller
{
    public function sendMail(){
        $data = [
            "title" => "contoh email",
            "body" => "Ini adalah contoh pengiriman email"
        ];

        \Mail::to("mahfuzon0@gmail.com")->send(new SendMail($data));
        Log::info("Emai Send");
        return "mail sent";
    }
}
