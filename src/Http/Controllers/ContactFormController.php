<?php

namespace RhinoCore\ContactForm\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Request;

class ContactFormController extends Controller
{

    public function send(Request $request) 
    {
        return $request->all();
    }

}