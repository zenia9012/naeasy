<?php

namespace App\Http\Controllers;


use App\Models\Service;
use Illuminate\Http\Request;
class DefaultController extends Controller
{
	public function index(  ) {

		$service = Service::getAllServices();
		
		return view('index.main', compact('service'));
	}

	public function about(  ) {

		return view('index.about');
	}

	public function contact( ) {

		return view('index.contact');
	}

	public function services( Request $request ) {

		$service = Service::getAllServices();

		return view('index.services', compact('service'));
	}
}
