<?php

namespace App\Http\Controllers;

Use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact()
    {
        return view('contact', [
            "title" => "Contact",
            "img" => "contact-bg.jpg"
        ]);
    }

    public function sendEmail(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'phone' => 'required|numeric',
            'message' => 'required'
        ]);

        Mail::to('mailserverdedot@gmail.com')->send(new ContactMail($validatedData));
        return back()->with('message_sent', 'Form submission successful!');
    }
}
