<?php

namespace App\Http\Controllers;

use App\Mail\ContactRequestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name'    => ['required', 'string', 'max:100'],
            'phone'   => ['required', 'string', 'max:30'],
            'email'   => ['required', 'email', 'max:150'],
            'service' => ['nullable', 'string', 'max:100'],
            'message' => ['nullable', 'string', 'max:2000'],
        ]);

        Mail::to('info@xtreamservicesltd.com')->send(new ContactRequestMail($validated));

        return back()->with('success', 'Thanks! Your request has been sent — we\'ll be in touch shortly.');
    }
}