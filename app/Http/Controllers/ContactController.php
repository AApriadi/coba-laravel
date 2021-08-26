<?php

namespace App\Http\Controllers;

Use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact(Request $title)
    {
        return view('contact', [
            "title" => "Contact"
        ]);
    }

    public function sendEmail(Request $request)
    {
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message
        ];

        Mail::to('mailserverdedot@gmail.com')->send(new ContactMail($details));
        return back()->with('message_sent', 'Form submission successful!');
    }
}
