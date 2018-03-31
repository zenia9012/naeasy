<?php

namespace App\Http\Controllers;


class DefaultController extends Controller
{
	public function index(  ) {

		return view('index.main');
	}

	public function about(  ) {

		return view('index.about');
	}

	public function contact( ) {

		return view('index.contact');
	}

	public function commercial(  ) {

		return view('index.contact');
	}

	public function services(  ) {

		return view('index.services');
	}
}
