<?php

namespace Tbassiouny\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Tbassiouny\Contact\Mail\ContactMailable;
use Tbassiouny\Contact\Models\Contact;

class ContactController extends Controller
{
    public function index(){

        return view('contact::contact');
    }

    public function send(Request $request){

        Mail::to(config('contact.send_mail_to'))->send(new ContactMailable($request->all()));
        Contact::create($request->all());

        return redirect(route('contact'));
    }
}
