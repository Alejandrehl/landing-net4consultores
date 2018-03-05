<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller
{
	public function contactUs(Request $request){
		$input = $request->input();
		dd($input);
	}
}
