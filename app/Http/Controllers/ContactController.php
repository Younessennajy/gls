<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function submitForm(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        // Send the email using the Mailable class
        Mail::to('younessennajy30@gmail.com') // Replace with your Gmail address
            ->send(new ContactFormMail($request->all()));

        // You can add additional logic or redirection after sending the email
        return redirect()->route('/');
    }
}
