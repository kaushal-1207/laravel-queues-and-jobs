<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Jobs\SendEmail;

class MyController extends Controller
{
    //
    public function sendEmail()
    {
        dispatch(new SendEmail());   
        return redirect('email_sent');
    }
}
