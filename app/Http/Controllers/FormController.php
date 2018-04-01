<?php

namespace App\Http\Controllers;

use App\Models\Callback;
use App\Models\Feedback;
use App\Models\SendCommercial;
use Illuminate\Http\Request;

class FormController extends Controller {

	/**
	 * method save feedback from users, first validate data, than save data to database
	 *
	 */
	public function feedback( Request $request ) {

		$this->validate( $request, [
			'name'    => 'required',
			'email'   => 'required|email',
			'message' => 'required|min:3',
		] );

		$name    = $request->input( 'name' );
		$email   = $request->input( 'email' );
		$message = $request->input( 'message' );

		Feedback::create( $name, $email, $message );
		$successMessage = __('base.success_send_message');

		return back()->with('message', $successMessage);
	}

	/**
	 * method save request for callback from users, first validate data, than save data to database
	 *
	 */
	public function callback( Request $request ) {

		$this->validate( $request, [
			'name'    => 'required',
			'phone'   => 'required',
		] );

		$name    = $request->input( 'name' );
		$phone   = $request->input( 'phone' );

		Callback::create( $name, $phone );

		return back();
	}

	/**
	 * method save request for callback from users, first validate data, than save data to database
	 *
	 */
	public function sendKP( Request $request ) {

		$this->validate( $request, [
			'name'    => 'required',
			'email'   => 'required',
		] );

		$name    = $request->input( 'name' );
		$email   = $request->input( 'email' );

		SendCommercial::create( $name, $email );

		return back();
	}
}
