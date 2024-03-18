<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class MailController extends Controller
{
    public function sendMail(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email|ends_with:@gmail.com',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        $validator->addReplacer('ends_with', function ($message, $attribute, $rule, $parameters) {
            return str_replace(':values', implode(', ', $parameters), $message);
        });

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message')
        ];

        Mail::send('welcome.footer', $data, function ($message) use ($data) {
            $message->to('younessennajy30@email.com')->subject($data['subject']);
            $message->from($data['email'], $data['name']);
        });

        Session::flash('success', 'Your message has been sent successfully!');

    // Redirection vers la page précédente après 10 secondes
    return redirect()->back()->withInput()->with('redirectAfter', true)->with('redirectDelay', 10);
    }
}
