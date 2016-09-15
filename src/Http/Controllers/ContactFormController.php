<?php

namespace RhinoCore\ContactForm\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{

    public function send(Request $request) 
    {
        $this->guardContactFormEmail();

        $sent = Mail::send('emails.contact', $request->all() , function ($message) use ($request)
        {

            $message->from($request->get('email'), $request->get('name'));

            $message->to(env('CONTACT_FORM_EMAIL'));

        });

        if( count(Mail::failures()) > 0){
            return response()->json([
                'sent' => false
            ], 422);
        }

        return response()->json([
            'sent' => true
        ]);
    }

    private function guardContactFormEmail()
    {
        if (empty(env('CONTACT_FORM_EMAIL'))) {
            throw new \Exception('CONTACT_FORM_EMAIL must be defined in the .env file to send a contact mail');
        }
    }

}