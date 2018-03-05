<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller
{
	public function contactUs(Request $request){
		$input = $request->input();
		$user_name = $input['name'];
		$user_email = $input['email'];
		$user_phone = $input['phone'];
		$user_message = $input['message'];
	}
}
