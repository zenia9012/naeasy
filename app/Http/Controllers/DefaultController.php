<?php

namespace App\Http\Controllers;


use App\Models\Service;

class DefaultController extends Controller
{
	public function index(  ) {

		$service['smm'] = Service::getServiceBykey('smm');
		$service['marketing'] = Service::getServiceBykey('marketing');
		$service['develop'] = Service::getServiceBykey('develop');
		$service['email'] = Service::getServiceBykey('email');
		$service['bisnes'] = Service::getServiceBykey('bisnes');
		
		return view('index.main', compact('service'));
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
