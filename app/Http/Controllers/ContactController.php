<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactModel;

class ContactController extends Controller
{
    //
    public function index() {

		$dataContact = array(
			'contacts' => ContactModel::orderBy('id')->take(1)->get(),
		);

		return view('contact', $dataContact);

	}
}
