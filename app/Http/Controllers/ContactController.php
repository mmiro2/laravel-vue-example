<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
	public function save(Request $request)
	{
		$this->validate($request, [
            				'name' => 'required|string|max:50',
            				'email' => 'required|email|max:50',
            				'phone' => 'numeric',
            				'message' => 'string|max:500',
        				]);


		return "response: ".$request->input('name');
	}
}
