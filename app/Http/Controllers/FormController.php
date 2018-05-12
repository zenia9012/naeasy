<?php

namespace App\Http\Controllers;

use App\Models\Callback;
use App\Models\Contact;
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

		$feedback = Feedback::create( $name, $email, $message );

		Contact::create($request->except(['_token', 'message']));

//		EmailController::NotifyAdminsFeedback($feedback);

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

		$callback = Callback::create( $name, $phone );

		Contact::create($request->except(['_token']));

		EmailController::NotifyAdminsCallback($callback);

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

		$commercial = SendCommercial::create( $name, $email );

		Contact::create($request->except(['_token']));

//		EmailController::NotifyAdminsSendKP($commercial);

		return back();
	}
}
