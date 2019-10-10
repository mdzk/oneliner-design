<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PortofolioModel;

class TemplateController extends Controller
{
    //
    public function index() {

		$dataTemplate = array(
			'portfolioTemplates' => PortofolioModel::orderBy('id', 'desc')->paginate(5),
		);

		return view('template', $dataTemplate);

	}
}
