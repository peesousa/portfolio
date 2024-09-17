<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    public function store(Request $request)
    {
        Mail::to('pedroeduardo.lsousa@gmail.com', 'Pedro Sousa')
            ->send(new Contact([
                'fromName' => $request->name,
                'fromEmail' => $request->email,
                'subject' => $request->subject,
                'message' => $request->message,
            ]));
    }
}
