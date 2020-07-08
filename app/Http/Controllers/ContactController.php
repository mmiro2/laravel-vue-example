<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inquirie;

class ContactController extends Controller
{
	public function save(Request $request)
	{
		$this->validate($request, [
            				'name' => 'required|string|max:50',
            				'email' => 'required|email:rfc,dns|max:50',
            				'phone' => 'numeric',
            				'message' => 'string|max:500',
				]);

		// if valid mass assign input from vue form
		Inquirie::create($request->all());

		$formdata = ['name' => $request->input('name'), 'email' => $request->input('email'), 'phone' => $request->input('phone'),'message' => $request->input('message')];
		\Mail::to('miro@stalkdog.com')->send(new \App\Mail\FormMail($formdata));

		return response()->json(null, 200);
	}
}
