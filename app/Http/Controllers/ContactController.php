<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class ContactController extends Controller
{
    //
    public function store(Request $request)

    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required|numeric',
                'subject' => 'required',
                'message' => 'required'
            ],
            [
                'name.required' => 'Name required',
                'email.required' => 'Email required',
                'email.email' => "Format email is'nt valid",
                'phone.required' => 'Phone required',
                'phone.numeric' => 'Phone is numeric',
                'subject.required' => 'Subject required',
                'message.required' => 'Message required',
            ]
        );
        if ($validator->fails()) {
            Alert::alert('Error', "There's an error", 'error');
            return redirect()->back()->withErrors($validator)
                ->withInput()->with(['status' => "There's an error", 'title' => 'Contact', 'type' => 'error']);
        }

        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        $mailData = [
            'title' => 'Mail - info@canyoningbaturraden.id',
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message
        ];

        Mail::to('info@canyoningbaturraden.id')->send(new ContactMail($mailData));

        Alert::alert('Success', 'Contact success', 'success');
        return redirect()->back()->with(['success' => 'Thank you for contact us. we will contact you shortly.']);
    }
}
