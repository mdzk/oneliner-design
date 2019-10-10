<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategoryModel;

class CategoryController extends Controller
{
    //
   	public function index() {

		$dataCategory = array(
			'categorys' => CategoryModel::orderBy('id')->get(),
		);

		return view('category', $dataCategory);

	}
}
