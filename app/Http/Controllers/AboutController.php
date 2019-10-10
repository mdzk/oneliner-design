<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AboutModel;

class AboutController extends Controller
{
    //
    public function index() {

		$dataAbout = array(
			'abouts' => AboutModel::orderBy('id')->take(1)->get(),
		);

		return view('about', $dataAbout);

	}
}
