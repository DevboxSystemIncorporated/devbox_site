<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\ContactEmail;

use Mail;

class ContactController extends Controller
{
	public function create()
    {
        return view('welcome');
    }

    public function store(Request $request)
	{

	    $contact = [];

	    $contact['name'] = $request->get('name');
	    $contact['email'] = $request->get('email');
	    $contact['subject'] = $request->get('subject');
	    $contact['msg'] = $request->get('msg');
	    //$subject = $request->get('subject');	

		Mail::to('devboxsystemcorps@gmail.com')->send(new ContactEmail($contact));

	    //flash('Your message has been sent!')->success();

	    return redirect()->route('welcome');

	}
}
