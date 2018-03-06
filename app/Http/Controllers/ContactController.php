<?php

Namespace App\Http\Controllers;

use App\Notifications\InboxMessage;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;
use App\Admin;

Class ContactController extends Controller
{
	public function show() 
	{
		return view('contact-us');
	}

	public function mailToAdmin(ContactFormRequest $request, Admin $admin)
	{ 
		//send the admin an notification
		$admin->notify(new InboxMessage($request));
		// redirect the user back
		return redirect()->back()->with('message', 'thanks for the message! We will get back to you soon!');
	}
}